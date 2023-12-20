<?php
class Banner extends Controller
{
  public $province;
  public $data = [];
  public function __construct()
  {
    // if (empty(Session::data('admin_login'))) {
    //   $response = new Response();
    //   $response->redirect('dang-nhap');
    // }
    $this->province = $this->model('BannerHomeModel');
  }
  public function index()
  {
    $title = 'Danh sách băng rôn trang chủ';
    $this->data['pages_title'] = $title;
    $this->data['sub_content']['table_name'] = $title;
    $this->data['body'] = 'admin/banner_home/list';
    $this->render('admin/layoutAdmin/admin_layout', $this->data);
  }
  public function banner_home_add()
  {
    $title = 'Thêm băng rôn trang chủ';
    $this->data['pages_title'] = $title;
    $this->data['sub_content']['table_name'] = $title;
    $this->data['body'] = 'admin/banner_home/add';
    $this->render('admin/layoutAdmin/admin_layout', $this->data);
  }
  public function banner_home_edit($banner_home_id = 0)
  {
    $title = 'Chỉnh sửa băng rôn trang chủ';
    $this->data['pages_title'] = $title;
    $this->data['sub_content']['table_name'] = $title;
    $this->data['body'] = 'admin/banner_home/edit';
    $this->render('admin/layoutAdmin/admin_layout', $this->data);
  }
}
