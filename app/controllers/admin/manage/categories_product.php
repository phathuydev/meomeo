<?php
class Categories_Product extends Controller
{
  public $province;
  public $data = [];
  public function __construct()
  {
    $this->province = $this->model('CategoriesProductModel');
  }
  public function index($page)
  {
    $title = 'Danh sách danh mục sản phẩm';
    $this->data['pages_title'] = $title;
    $this->data['sub_content']['table_name'] = $title;
    $countAllCategoriesProduct = $this->province->countAllCategoriesProduct();
    $this->data['sub_content']['countAllCategoriesProduct'] = $countAllCategoriesProduct;
    $perPage = 10;
    $offset = ($page - 1) * $perPage;
    $totalPage = ceil($countAllCategoriesProduct['countAllCategoriesProduct'] / $perPage);
    $this->data['sub_content']['totalPage'] = $totalPage;
    $this->data['sub_content']['perPage'] = $perPage;
    $this->data['sub_content']['page'] = $page;
    $getAllCategoriesProduct = $this->province->getAllCategoriesProduct($perPage, $offset);
    if (isset($_POST['delete'])) {
      $id = $_POST['id'];
      $data = [
        'xoaDanhMuc' => 1,
        'ngayxoaDanhMuc' => date('Y-m-d H:i:s'),
        'nguoixoaDanhMuc' => Session::data('user_admin')
      ];
      $this->province->updateCategories($data, $id);
      $response = new Response();
      $response->redirect('danh-sach-danh-muc-san-pham/trang-' . $page);
    } elseif (isset($_POST['restore'])) {
      $id = $_POST['id'];
      $data = [
        'xoaDanhMuc' => 0,
        'nguoixoaDanhMuc' => 0
      ];
      $this->province->updateCategories($data, $id);
      $response = new Response();
      $response->redirect('danh-sach-danh-muc-san-pham/trang-' . $page);
    } elseif (isset($_POST['deleted'])) {
      $id = $_POST['id'];
      $this->province->deleteCategories($id);
      $response = new Response();
      $response->redirect('danh-sach-danh-muc-san-pham/trang-' . $page);
    }
    $this->data['sub_content']['getAllCategoriesProduct'] = $getAllCategoriesProduct;
    $this->data['body'] = 'admin/categories_product/list';
    $this->render('admin/layoutAdmin/admin_layout', $this->data);
  }
  public function categories_add()
  {
    $title = 'Thêm danh mục sản phẩm mới';
    $this->data['pages_title'] = $title;
    $this->data['sub_content']['table_name'] = $title;
    if (isset($_POST['addCategoriesProduct'])) {
      $nameCategoriesProduct = $_POST['nameCategoriesProduct'];
      $checkNameCategories = $this->province->getNameCategories();
      if ($nameCategoriesProduct === $checkNameCategories['tenDanhMuc']) {
        Session::flash('msg', 'Tên danh mục đã tồn tại, hãy thử lại!');
      } else {
        $data = [
          'tenDanhMuc' => $nameCategoriesProduct,
          'nguoitaoDanhMuc' => Session::data('user_admin')
        ];
        $this->province->insertCategoriesProduct($data);
        $response = new Response();
        $response->redirect('danh-sach-danh-muc-san-pham/trang-1');
      }
    }
    $this->data['sub_content']['msg'] = Session::flash('msg');
    $this->data['body'] = 'admin/categories_product/add';
    $this->render('admin/layoutAdmin/admin_layout', $this->data);
  }
  public function categories_edit($page, $id)
  {
    $getDetail = $this->province->getCategoriesProductDetail($id);
    $this->data['sub_content']['getDetail'] = $getDetail;
    $title = 'Sửa danh mục sản phẩm #' . $getDetail['tenDanhMuc'];
    $this->data['pages_title'] = $title;
    $this->data['sub_content']['table_name'] = $title;
    $this->data['sub_content']['page'] = $page;
    if (isset($_POST['editCategoriesProduct'])) {
      $nameCategories = $_POST['nameCategoriesProduct'];
      $nameCategoriesProductDefault = $_POST['nameCategoriesProductDefault'];
      $checkName = $this->province->getName($nameCategories);
      if ($nameCategories === $nameCategoriesProductDefault) {
        $id = $_POST['id'];
        $data = [
          'tenDanhMuc' => $nameCategories,
          'ngaysuaDanhMuc' => date('Y-m-d H:i:s'),
          'nguoisuaDanhMuc' => Session::data('user_admin')
        ];
        $this->province->updateCategories($data, $id);
        $response = new Response();
        $response->redirect('danh-sach-danh-muc-san-pham/trang-' . $page);
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
        $response->redirect('danh-sach-danh-muc-san-pham/trang-' . $page);
      }
    }
    $this->data['sub_content']['msg'] = Session::flash('msg');
    $this->data['body'] = 'admin/categories_product/edit';
    $this->render('admin/layoutAdmin/admin_layout', $this->data);
  }
  public function categories_detail($page, $id)
  {
    $getDetail = $this->province->getCategoriesProductDetail($id);
    $this->data['sub_content']['getDetail'] = $getDetail;
    $title = 'Chi tiết danh mục sản phẩm #' . $getDetail['tenDanhMuc'];
    $getNguoiTao = $this->province->getUserCreated($getDetail['nguoitaoDanhMuc']);
    $this->data['sub_content']['getNguoiTao'] = $getNguoiTao;
    $getNguoiSua = $this->province->getUserUpdated($getDetail['nguoisuaDanhMuc']);
    $this->data['sub_content']['getNguoiSua'] = $getNguoiSua;
    $getNguoiXoa = $this->province->getUserDeleted($getDetail['nguoixoaDanhMuc']);
    $this->data['sub_content']['getNguoiXoa'] = $getNguoiXoa;
    $this->data['pages_title'] = $title;
    $this->data['sub_content']['table_name'] = $title;
    $this->data['body'] = 'admin/categories_product/detail';
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
      $response->redirect('danh-sach-danh-muc-san-pham/trang-' . $page);
    } elseif (isset($_POST['restore'])) {
      $id = $_POST['id'];
      $data = [
        'xoaDanhMuc' => 0,
        'nguoixoaDanhMuc' => 0
      ];
      $this->province->updateCategories($data, $id);
      $response = new Response();
      $response->redirect('danh-sach-danh-muc-san-pham/trang-' . $page);
    } elseif (isset($_POST['deleted'])) {
      $id = $_POST['id'];
      $this->province->deleteCategories($id);
      $response = new Response();
      $response->redirect('danh-sach-danh-muc-san-pham/trang-' . $page);
    }
    $this->data['body'] = 'admin/categories_product/search';
    $this->render('admin/layoutAdmin/admin_layout', $this->data);
  }
}
