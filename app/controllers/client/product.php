<?php
class Product extends Controller
{

  public $province, $data = [];
  public function __construct()
  {
    $this->province = $this->model('ProductModel');
  }
  public function index()
  {
    $title = 'Cửa hàng';
    $this->data['pages_title'] = $title;
    $this->data['sub_content'][] = [];
    $this->data['content'] = 'client/product/product';
    $this->render('client/layoutClient/client_layout', $this->data);
  }
  public function product_detail($product_id = 0, $category_id = 0)
  {
    $title = 'Chi tiết sản phẩm';
    $this->data['pages_title'] = $title;
    $this->data['sub_content'][] = [];
    $this->data['content'] = 'client/product/product-detail';
    $this->render('client/layoutClient/client_layout', $this->data);
  }
  public function product_category($category_id = 0)
  {
    $title = 'Sản phẩm danh mục';
    $this->data['pages_title'] = $title;
    $this->data['sub_content'][] = [];
    $this->data['content'] = 'client/product/product-category';
    $this->render('client/layoutClient/client_layout', $this->data);
  }
  public function product_search($keyword = '')
  {
    $title = 'Sản phẩm tìm kiếm';
    $this->data['pages_title'] = $title;
    $this->data['sub_content'][] = [];
    $this->data['content'] = 'client/product/product-search';
    $this->render('client/layoutClient/client_layout', $this->data);
  }
}
