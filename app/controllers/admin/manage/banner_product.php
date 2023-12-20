<?php
class Banner_Product extends Controller
{
  public $province;
  public $data = [];
  public function __construct()
  {
    // if (empty(Session::data('admin_login'))) {
    //   $response = new Response();
    //   $response->redirect('dang-nhap');
    // }
    $this->province = $this->model('BannerProductModel');
  }
  public function banner_product_detail($sanPhamId = 0)
  {
    $title = 'Chi tiết banner sản phẩm';
    $this->data['pages_title'] = $title;
    $this->data['sub_content']['table_name'] = $title;
    $this->data['body'] = 'admin/banner_product/banner_detail';
    $this->render('admin/layoutAdmin/admin_layout', $this->data);
  }
  public function banner_product_edit($bangRonId = 0)
  {
    $title = 'Chỉnh sửa băng rôn sản phẩm';
    $this->data['pages_title'] = $title;
    $this->data['sub_content']['table_name'] = $title;
    $this->data['body'] = 'admin/banner_product/banner_edit';
    $this->render('admin/layoutAdmin/admin_layout', $this->data);
  }
}
