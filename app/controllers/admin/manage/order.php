<?php
class Order extends Controller
{
  public $province;
  public $data = [];
  public function __construct()
  {
    // if (empty(Session::data('admin_login'))) {
    //   $response = new Response();
    //   $response->redirect('dang-nhap');
    // }
    $this->province = $this->model('OrderModel');
  }
  public function index()
  {
    $title = 'Danh sách đơn hàng';
    $this->data['pages_title'] = $title;
    $this->data['sub_content']['table_name'] = $title;
    $this->data['body'] = 'admin/order/list';
    $this->render('admin/layoutAdmin/admin_layout', $this->data);
  }
  public function order_edit($orderId = 0)
  {
    $title = 'Chỉnh sửa trạng thái vận chuyển';
    $this->data['pages_title'] = $title;
    $this->data['sub_content']['table_name'] = $title;
    $this->data['body'] = 'admin/order/edit';
    $this->render('admin/layoutAdmin/admin_layout', $this->data);
  }
  public function order_detail($orderId = 0)
  {
    $title = 'Chi tiết sản phẩm đơn hàng';
    $this->data['pages_title'] = $title;
    $this->data['sub_content']['table_name'] = $title;
    $this->data['body'] = 'admin/order/order_detail';
    $this->render('admin/layoutAdmin/admin_layout', $this->data);
  }
  public function order_more($orderId = 0)
  {
    $title = 'Xem thêm thông tin đơn hàng';
    $this->data['pages_title'] = $title;
    $this->data['sub_content']['table_name'] = $title;
    $this->data['body'] = 'admin/order/order_more';
    $this->render('admin/layoutAdmin/admin_layout', $this->data);
  }
  public function order_search($keywordOrder = '')
  {
    $title = 'Đơn hàng tìm kiếm : ' . $keywordOrder . '';
    $this->data['pages_title'] = $title;
    $this->data['sub_content']['table_name'] = $title;
    $this->data['body'] = 'admin/order/search';
    $this->render('admin/layoutAdmin/admin_layout', $this->data);
  }
}
