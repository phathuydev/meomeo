<?php
class Categories_Post extends Controller
{
  public $province;
  public $data = [];
  public function __construct()
  {
    $this->province = $this->model('CategoriesPostModel');
  }
  public function index($page)
  {
    $title = 'Danh sách danh mục bài viết';
    $this->data['pages_title'] = $title;
    $this->data['sub_content']['table_name'] = $title;
    $countAllCategoriesPost = $this->province->countAllCategoriesPost();
    $this->data['sub_content']['countAllCategoriesPost'] = $countAllCategoriesPost;
    $perPage = 10;
    $offset = ($page - 1) * $perPage;
    $totalPage = ceil($countAllCategoriesPost['countAllCategoriesPost'] / $perPage);
    $this->data['sub_content']['totalPage'] = $totalPage;
    $this->data['sub_content']['perPage'] = $perPage;
    $this->data['sub_content']['page'] = $page;
    $getAllCategoriesPost = $this->province->getAllCategoriesPost($perPage, $offset);
    if (isset($_POST['delete'])) {
      $id = $_POST['id'];
      $data = [
        'xoaDanhMuc' => 1,
        'ngayxoaDanhMuc' => date('Y-m-d H:i:s'),
        'nguoixoaDanhMuc' => Session::data('user_admin')
      ];
      $this->province->updateCategories($data, $id);
      $response = new Response();
      $response->redirect('danh-sach-danh-muc-baiviet/trang-' . $page);
    } elseif (isset($_POST['restore'])) {
      $id = $_POST['id'];
      $data = [
        'xoaDanhMuc' => 0,
        'nguoixoaDanhMuc' => 0
      ];
      $this->province->updateCategories($data, $id);
      $response = new Response();
      $response->redirect('danh-sach-danh-muc-baiviet/trang-' . $page);
    } elseif (isset($_POST['deleted'])) {
      $id = $_POST['id'];
      $this->province->deleteCategories($id);
      $response = new Response();
      $response->redirect('danh-sach-danh-muc-baiviet/trang-' . $page);
    }
    $this->data['sub_content']['getAllCategoriesPost'] = $getAllCategoriesPost;
    $this->data['body'] = 'admin/categories_Post/list';
    $this->render('admin/layoutAdmin/admin_layout', $this->data);
  }
  public function categories_add()
  {
    $title = 'Thêm danh mục bài viết mới';
    $this->data['pages_title'] = $title;
    $this->data['sub_content']['table_name'] = $title;
    if (isset($_POST['addCategoriesPost'])) {
      $nameCategoriesPost = $_POST['nameCategoriesPost'];
      $checkNameCategories = $this->province->getNameCategories();
      if ($nameCategoriesPost === $checkNameCategories['tenDanhMuc']) {
        Session::flash('msg', 'Tên danh mục đã tồn tại, hãy thử lại!');
      } else {
        $data = [
          'tenDanhMuc' => $nameCategoriesPost,
          'nguoitaoDanhMuc' => Session::data('user_admin')
        ];
        $this->province->insertCategoriesPost($data);
        $response = new Response();
        $response->redirect('danh-sach-danh-muc-baiviet/trang-1');
      }
    }
    $this->data['sub_content']['msg'] = Session::flash('msg');
    $this->data['body'] = 'admin/categories_Post/add';
    $this->render('admin/layoutAdmin/admin_layout', $this->data);
  }
  public function categories_edit($page, $id)
  {
    $getDetail = $this->province->getCategoriesPostDetail($id);
    $this->data['sub_content']['getDetail'] = $getDetail;
    $title = 'Sửa danh mục bài viết #' . $getDetail['tenDanhMuc'];
    $this->data['pages_title'] = $title;
    $this->data['sub_content']['table_name'] = $title;
    $this->data['sub_content']['page'] = $page;
    if (isset($_POST['editCategoriesPost'])) {
      $nameCategories = $_POST['nameCategoriesPost'];
      $nameCategoriesPostDefault = $_POST['nameCategoriesPostDefault'];
      $checkName = $this->province->getName($nameCategories);
      if ($nameCategories === $nameCategoriesPostDefault) {
        $id = $_POST['id'];
        $data = [
          'tenDanhMuc' => $nameCategories,
          'ngaysuaDanhMuc' => date('Y-m-d H:i:s'),
          'nguoisuaDanhMuc' => Session::data('user_admin')
        ];
        $this->province->updateCategories($data, $id);
        $response = new Response();
        $response->redirect('danh-sach-danh-muc-baiviet/trang-' . $page);
      } elseif ($checkName) {
        Session::flash('msg', 'Tênh danh mục đã tồn tại!');
      } else {
        $id = $_POST['id'];
        $data = [
          'tenDanhMuc' => $nameCategories,
          'ngaysuaDanhMuc' => date('Y-m-d H:i:s'),
          'nguoisuaDanhMuc' => Session::data('user_admin')
        ];
        $this->province->updateCategories($data, $id);
        $response = new Response();
        $response->redirect('danh-sach-danh-muc-baiviet/trang-' . $page);
      }
    }
    $this->data['sub_content']['msg'] = Session::flash('msg');
    $this->data['body'] = 'admin/categories_Post/edit';
    $this->render('admin/layoutAdmin/admin_layout', $this->data);
  }
  public function categories_detail($page, $id)
  {
    $getDetail = $this->province->getCategoriesPostDetail($id);
    $this->data['sub_content']['getDetail'] = $getDetail;
    $title = 'Chi tiết danh mục bài viết #' . $getDetail['tenDanhMuc'];
    $getNguoiTao = $this->province->getUserCreated($getDetail['nguoitaoDanhMuc']);
    $this->data['sub_content']['getNguoiTao'] = $getNguoiTao;
    $getNguoiSua = $this->province->getUserUpdated($getDetail['nguoisuaDanhMuc']);
    $this->data['sub_content']['getNguoiSua'] = $getNguoiSua;
    $getNguoiXoa = $this->province->getUserDeleted($getDetail['nguoixoaDanhMuc']);
    $this->data['sub_content']['getNguoiXoa'] = $getNguoiXoa;
    $this->data['pages_title'] = $title;
    $this->data['sub_content']['table_name'] = $title;
    $this->data['body'] = 'admin/categories_Post/detail';
    $this->render('admin/layoutAdmin/admin_layout', $this->data);
  }
  public function categories_search($page)
  {
    $title = 'Từ khóa danh mục: ' . $_POST['keywordCategories'] . '';
    $this->data['pages_title'] = $title;
    $this->data['sub_content']['table_name'] = $title;
    $this->data['sub_content']['page'] = $page;
    $keywordCategories = $_POST['keywordCategories'];
    $getCategoriesSearch = $this->province->getCategoriesSearch($keywordCategories);
    $this->data['sub_content']['getCategoriesSearch'] = $getCategoriesSearch;
    if (!$getCategoriesSearch) {
      Session::flash('msg', 'Không tồn danh mục này!');
      $this->data['sub_content']['msg'] = Session::flash('msg');
    } elseif (isset($_POST['delete'])) {
      $id = $_POST['id'];
      $data = [
        'xoaDanhMuc' => 1,
        'ngayxoaDanhMuc' => date('Y-m-d H:i:s'),
        'nguoixoaDanhMuc' => Session::data('user_admin')
      ];
      $this->province->updateCategories($data, $id);
      $response = new Response();
      $response->redirect('danh-sach-danh-muc-baiviet/trang-' . $page);
    } elseif (isset($_POST['restore'])) {
      $id = $_POST['id'];
      $data = [
        'xoaDanhMuc' => 0,
        'nguoixoaDanhMuc' => 0
      ];
      $this->province->updateCategories($data, $id);
      $response = new Response();
      $response->redirect('danh-sach-danh-muc-baiviet/trang-' . $page);
    } elseif (isset($_POST['deleted'])) {
      $id = $_POST['id'];
      $this->province->deleteCategories($id);
      $response = new Response();
      $response->redirect('danh-sach-danh-muc-baiviet/trang-' . $page);
    }
    $this->data['body'] = 'admin/categories_Post/search';
    $this->render('admin/layoutAdmin/admin_layout', $this->data);
  }
}
