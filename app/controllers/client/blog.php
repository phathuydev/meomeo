<?php
class Blog extends Controller
{

  public $province, $data = [];
  public function __construct()
  {
    $this->province = $this->model('BlogModel');
  }
  public function index()
  {
    $title = 'Danh Sách Bài Viết';
    $this->data['pages_title'] = $title;
    $this->data['sub_content'][] = [];
    $this->data['content'] = 'client/blog/blog';
    $this->render('client/layoutClient/client_layout', $this->data);
  }
  public function blog_detail($blog_id = 0)
  {
    $title = 'Bài Viết Số ' . $blog_id . '';
    $this->data['pages_title'] = $title;
    $this->data['sub_content'][] = [];
    $this->data['content'] = 'client/blog/blog-detail';
    $this->render('client/layoutClient/client_layout', $this->data);
  }
}
