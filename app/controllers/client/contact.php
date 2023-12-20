<?php
class Contact extends Controller
{

  public $province, $data = [];
  public function __construct()
  {
    $this->province = $this->model('ContactModel');
  }
  public function index()
  {
    $title = 'Liên hệ';
    $this->data['pages_title'] = $title;
    $this->data['sub_content'][] = [];
    $this->data['content'] = 'client/contact/contact';
    $this->render('client/layoutClient/client_layout', $this->data);
  }
}
