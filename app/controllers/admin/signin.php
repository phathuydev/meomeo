<?php
class Signin extends Controller
{
  public $province;
  public $data = [];
  public function __construct()
  {
    $this->province = $this->model('AuthModel');
  }
  public function index()
  {
    $title = 'Đăng nhập';
    $this->data['sub_content']['pages_title'] = [];
    if (isset($_POST['dangNhap'])) {
      $email = $_POST['email'];
      $password = $_POST['password'];
      $checkEmail = $this->province->getUserLogin($email);
      if ($checkEmail) {
        if (password_verify($password, $checkEmail['matkhauKhachHang'])) {
          Session::data('user_admin', $checkEmail['id']);
          $response = new Response();
          $response->redirect('admin');
        } else {
          Session::flash('msg', 'Email hoặc mật khẩu không đúng!');
        }
      } else {
        Session::flash('msg', 'Vui lòng điền đầy đủ thông tin!');
      }
    }
    $this->data['sub_content']['user_admin'] = Session::data('user_admin');
    $this->data['msg'] = Session::flash('msg');
    $this->data['pages_title'] = $title;
    $this->render('admin/signin', $this->data);
  }
  public function signout()
  {
    Session::delete('user_admin');
    $response = new Response();
    $response->redirect('dang-nhap');
  }
}
