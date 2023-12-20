<?php
class Home extends Controller
{

  public $province, $data = [];
  public function __construct()
  {
    $this->province = $this->model('HomeModel');
  }
  public function index()
  {
    $title = 'Trang chủ';
    $this->data['pages_title'] = $title;
    $this->data['hero_normal'] = 'hero-normal';
    $this->data['sub_content'][''] = '';
    $this->data['content'] = 'client/home/home';
    $this->render('client/layoutClient/client_layout', $this->data);
  }
}
