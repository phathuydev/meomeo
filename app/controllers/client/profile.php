<?php
class Profile extends Controller
{

  public $province, $data = [];
  public function __construct()
  {
    $this->province = $this->model('ProfileModel');
  }
  public function index()
  {
    $title = 'Hồ sơ';
    $this->data['pages_title'] = $title;
    $this->data['profile_css'] = './app/views/client/public/css/profile.css';
    $this->data['sub_content'][] = [];
    $this->data['content'] = 'client/profile/profile';
    $this->render('client/layoutClient/client_layout', $this->data);
  }
  public function profile_orther($user_id = 0)
  {
    $title = 'Hồ sơ';
    $this->data['pages_title'] = $title;
    $this->data['profile_css'] = './app/views/client/public/css/profile.css';
    $this->data['sub_content'][] = [];
    $this->data['content'] = 'client/profile/profile_orther';
    $this->render('client/layoutClient/client_layout', $this->data);
  }
}
