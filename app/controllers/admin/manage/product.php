<?php
class Product extends Controller
{
  public $province;
  public $data = [];
  public function __construct()
  {
    // if (empty(Session::data('admin_login'))) {
    //   $response = new Response();
    //   $response->redirect('dang-nhap');
    // }
    $this->province = $this->model('ProductModel');
  }
  public function index()
  {
    $title = 'Danh sách sản phẩm';
    $this->data['pages_title'] = $title;
    $this->data['sub_content']['table_name'] = $title;
    $this->data['body'] = 'admin/product/list';
    $this->render('admin/layoutAdmin/admin_layout', $this->data);
  }
  public function add_product()
  {
    $title = 'Thêm sản phẩm mới';
    $this->data['pages_title'] = $title;
    $this->data['sub_content']['table_name'] = $title;
    $this->data['body'] = 'admin/product/add';
    $this->render('admin/layoutAdmin/admin_layout', $this->data);
  }
  public function edit_product($sanPhamId = 0)
  {
    $title = 'Chỉnh sửa thông tin sản phẩm';
    $this->data['pages_title'] = $title;
    $this->data['sub_content']['table_name'] = $title;
    $this->data['body'] = 'admin/product/edit';
    $this->render('admin/layoutAdmin/admin_layout', $this->data);
  }
  public function detail_product($sanPhamId = 0)
  {
    $title = 'Chi tiết sản phẩm';
    $this->data['pages_title'] = $title;
    $this->data['sub_content']['table_name'] = $title;
    $this->data['body'] = 'admin/product/detail';
    $this->render('admin/layoutAdmin/admin_layout', $this->data);
  }
  public function product_search($keywordProduct = '')
  {
    $title = 'Sản phẩm tìm kiếm: ' . $keywordProduct . '';
    $this->data['pages_title'] = $title;
    $this->data['sub_content']['table_name'] = $title;
    $this->data['body'] = 'admin/product/search';
    $this->render('admin/layoutAdmin/admin_layout', $this->data);
  }
}
