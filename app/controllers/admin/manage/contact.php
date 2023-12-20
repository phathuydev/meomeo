<?php
class Contact extends Controller
{
  public $province;
  public $data = [];
  public function __construct()
  {
    // if (empty(Session::data('admin_login'))) {
    //   $response = new Response();
    //   $response->redirect('dang-nhap');
    // }
    $this->province = $this->model('ContactModel');
  }
  public function index()
  {
    $title = 'Danh sách liên hệ';
    $this->data['pages_title'] = $title;
    $this->data['sub_content']['table_name'] = $title;
    $this->data['body'] = 'admin/contact/list';
    $this->render('admin/layoutAdmin/admin_layout', $this->data);
  }
}
