<?php
class Sale extends Controller
{

  public $province, $data = [];
  public function __construct()
  {
    $this->province = $this->model('SaleModel');
  }
  public function index()
  {
    $title = 'Mã giảm giá';
    $this->data['pages_title'] = $title;
    $this->data['sub_content'][] = [];
    $this->data['content'] = 'client/sale/sale';
    $this->render('client/layoutClient/client_layout', $this->data);
  }
}
