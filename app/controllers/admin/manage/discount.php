<?php
class Discount extends Controller
{
  public $province;
  public $data = [];
  public function __construct()
  {
    // if (empty(Session::data('admin_login'))) {
    //   $response = new Response();
    //   $response->redirect('dang-nhap');
    // }
    $this->province = $this->model('DiscountModel');
  }
  public function index()
  {
    $title = 'Danh sách mã giảm giá';
    $this->data['pages_title'] = $title;
    $this->data['sub_content']['table_name'] = $title;
    $this->data['body'] = 'admin/discount/list';
    $this->render('admin/layoutAdmin/admin_layout', $this->data);
  }
  public function discount_add()
  {
    $title = 'Thêm mã giảm giá';
    $this->data['pages_title'] = $title;
    $this->data['sub_content']['table_name'] = $title;
    $this->data['body'] = 'admin/discount/add';
    $this->render('admin/layoutAdmin/admin_layout', $this->data);
  }
  public function discount_edit($discount_id = 0)
  {
    $title = 'Chỉnh sửa mã giảm giá';
    $this->data['pages_title'] = $title;
    $this->data['sub_content']['table_name'] = $title;
    $this->data['body'] = 'admin/discount/edit';
    $this->render('admin/layoutAdmin/admin_layout', $this->data);
  }
  public function discount_detail($discount_id = 0)
  {
    $title = 'Xem thêm thông tin mã giảm giá';
    $this->data['pages_title'] = $title;
    $this->data['sub_content']['table_name'] = $title;
    $this->data['body'] = 'admin/discount/detail';
    $this->render('admin/layoutAdmin/admin_layout', $this->data);
  }
  public function discount_search($keyworDiscount = '')
  {
    $title = 'Mã giảm giá tìm kiếm : ' . $keyworDiscount . '';
    $this->data['pages_title'] = $title;
    $this->data['sub_content']['table_name'] = $title;
    $this->data['body'] = 'admin/discount/search';
    $this->render('admin/layoutAdmin/admin_layout', $this->data);
  }
}
