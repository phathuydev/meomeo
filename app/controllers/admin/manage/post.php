<?php
class Post extends Controller
{
  public $province;
  public $data = [];
  public function __construct()
  {
    // if (empty(Session::data('admin_login'))) {
    //   $response = new Response();
    //   $response->redirect('dang-nhap');
    // }
    $this->province = $this->model('PostModel');
  }
  public function index()
  {
    $title = 'Danh sách bài viết';
    $this->data['pages_title'] = $title;
    $this->data['sub_content']['table_name'] = $title;
    $this->data['body'] = 'admin/post/list';
    $this->render('admin/layoutAdmin/admin_layout', $this->data);
  }
  public function add_post()
  {
    $title = 'Thêm bài viết';
    $this->data['pages_title'] = $title;
    $this->data['sub_content']['table_name'] = $title;
    $this->data['body'] = 'admin/post/add';
    $this->render('admin/layoutAdmin/admin_layout', $this->data);
  }
  public function edit_post($post_id = 0)
  {
    $title = 'Sửa bài viết';
    $this->data['pages_title'] = $title;
    $this->data['sub_content']['table_name'] = $title;
    $this->data['body'] = 'admin/post/edit';
    $this->render('admin/layoutAdmin/admin_layout', $this->data);
  }
  public function detail_post($post_id = 0)
  {
    $title = 'Chi tiết bài viết';
    $this->data['pages_title'] = $title;
    $this->data['sub_content']['table_name'] = $title;
    $this->data['body'] = 'admin/post/detail';
    $this->render('admin/layoutAdmin/admin_layout', $this->data);
  }
  public function search_post($keywordPost = 'Lữ Phát Huy')
  {
    $title = 'Bài viết tìm kiếm: ' . $keywordPost . '';
    $this->data['pages_title'] = $title;
    $this->data['sub_content']['table_name'] = $title;
    $this->data['body'] = 'admin/post/search';
    $this->render('admin/layoutAdmin/admin_layout', $this->data);
  }
}
