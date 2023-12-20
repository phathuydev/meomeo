<?php
class Comments extends Controller
{
  public $province;
  public $data = [];
  public function __construct()
  {
    // if (empty(Session::data('admin_login'))) {
    //   $response = new Response();
    //   $response->redirect('dang-nhap');
    // }
    $this->province = $this->model('CommentModel');
  }
  public function index()
  {
    $title = 'Danh sách bình luận';
    $this->data['pages_title'] = $title;
    $this->data['sub_content']['table_name'] = $title;
    $this->data['body'] = 'admin/comments/list';
    $this->render('admin/layoutAdmin/admin_layout', $this->data);
  }
  public function comment_search($keywordComment = '')
  {
    $title = 'Bình luận tìm kiếm: ' . $keywordComment . '';
    $this->data['pages_title'] = $title;
    $this->data['sub_content']['table_name'] = $title;
    $this->data['body'] = 'admin/comments/search';
    $this->render('admin/layoutAdmin/admin_layout', $this->data);
  }
}
