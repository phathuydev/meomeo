<?php
class Cart extends Controller
{

  public $province, $data = [];
  public function __construct()
  {
    $this->province = $this->model('CartModel');
  }
  public function index()
  {
    $title = 'Giỏ hàng';
    $this->data['pages_title'] = $title;
    $this->data['sub_content'][] = [];
    $this->data['content'] = 'client/cart/shoping-cart';
    $this->render('client/layoutClient/client_layout', $this->data);
  }
  public function checkout()
  {
    $title = 'Thanh toán';
    $this->data['pages_title'] = $title;
    $this->data['sub_content'][] = [];
    $this->data['content'] = 'client/cart/checkout';
    $this->render('client/layoutClient/client_layout', $this->data);
  }
  public function thank()
  {
    $title = 'Cảm ơn đã mua hàng';
    $this->data['pages_title'] = $title;
    $this->data['sub_content'][] = [];
    $this->data['content'] = 'client/cart/thank';
    $this->render('client/layoutClient/client_layout', $this->data);
  }
}
