<?php
class User extends Controller
{
  public $province;
  public $data = [];
  public function __construct()
  {
    if (empty(Session::data('user_admin'))) {
      $response = new Response();
      $response->redirect('dang-nhap');
    }
    $this->province = $this->model('UserModel');
  }
  public function index($page)
  {
    $countAllUser = $this->province->countAllUser();
    $this->data['sub_content']['countAllUser'] = $countAllUser;
    $perPage = 10;
    $offset = ($page - 1) * $perPage;
    $totalPage = ceil($countAllUser['countAllUser'] / $perPage);
    $this->data['sub_content']['totalPage'] = $totalPage;
    $this->data['sub_content']['perPage'] = $perPage;
    $this->data['sub_content']['page'] = $page;
    $title = 'Danh sách người dùng';
    $this->data['pages_title'] = $title;
    $this->data['sub_content']['table_name'] = $title;
    $getDanhSachNguoiDung = $this->province->getAllUser($perPage, $offset);
    if (isset($_POST['delete'])) {
      $id = $_POST['id'];
      $data = [
        'xoaKhachHang' => 1,
        'ngayxoaKhachHang' => date('Y-m-d H:i:s'),
        'nguoixoaKhachHang' => Session::data('user_admin')
      ];
      $this->province->updateUser($data, $id);
      $response = new Response();
      $response->redirect('danh-sach-nguoi-dung/trang-' . $page . '');
    } elseif (isset($_POST['restore'])) {
      $id = $_POST['id'];
      $data = [
        'xoaKhachHang' => 0,
        'nguoixoaKhachHang' => 0
      ];
      $this->province->updateUser($data, $id);
      $response = new Response();
      $response->redirect('danh-sach-nguoi-dung/trang-' . $page . '');
    } elseif (isset($_POST['deleted'])) {
      $id = $_POST['id'];
      $this->province->deletedUser($id);
      $response = new Response();
      $response->redirect('danh-sach-nguoi-dung/trang-' . $page . '');
    }
    $this->data['sub_content']['getAllUser'] = $getDanhSachNguoiDung;
    $this->data['body'] = 'admin/user/list';
    $this->render('admin/layoutAdmin/admin_layout', $this->data);
  }
  public function add_user()
  {
    $title = 'Thêm quản trị viên';
    $this->data['pages_title'] = $title;
    $this->data['sub_content']['table_name'] = $title;
    if (isset($_POST['addUser'])) {
      $name = $_POST['name'];
      $code = $_POST['code'];
      $email = $_POST['email'];
      $password = $_POST['password'];
      $image = $_FILES['image']['name'];
      $target_dir = 'app/views/admin/uploaded_image/';
      $target_file = $target_dir . basename($image);
      move_uploaded_file($_FILES['image']['tmp_name'], $target_file);
      $checkAddUserEmail = $this->province->getUserCodeAndEmail();
      if ($email === $checkAddUserEmail['emailKhachHang']) {
        Session::flash('msg', 'Email đã tồn tại!');
      } elseif ($code === $checkAddUserEmail['maKhachHang']) {
        Session::flash('msg', 'Có lỗi khi thêm, hãy thử lại!');
      } else {
        $data = [
          'tenKhachHang' => $name,
          'anhKhachHang' => $target_file,
          'maKhachHang' => $code,
          'emailKhachHang' => $email,
          'matkhauKhachHang' => password_hash($password, PASSWORD_DEFAULT),
          'phanquyenKhachHang' => 2,
          'nguoitaoKhachHang' => Session::data('user_admin')
        ];
        $this->province->insertUser($data);
        $response = new Response();
        $response->redirect('danh-sach-nguoi-dung/trang-1');
      }
    }
    $this->data['body'] = 'admin/user/add';
    $this->render('admin/layoutAdmin/admin_layout', $this->data);
  }
  public function edit_user($page, $id)
  {
    $getDanhSachNguoiDung = $this->province->getUserDetail($id);
    $this->data['sub_content']['getUserDetail'] = $getDanhSachNguoiDung;
    $title = 'Sửa thông tin quản trị viên #' . $getDanhSachNguoiDung['maKhachHang'];
    $this->data['pages_title'] = $title;
    $this->data['sub_content']['table_name'] = $title;
    $this->data['sub_content']['page'] = $page;
    if (isset($_POST['editUser'])) {
      $id = $_POST['id'];
      $name = $_POST['name'];
      $image = $_FILES['image']['name'];
      $target_dir = 'app/views/admin/uploaded_image/';
      $target_file = $target_dir . basename($image);
      move_uploaded_file($_FILES['image']['tmp_name'], $target_file);
      $data = [
        'tenKhachHang' => $name,
        'anhKhachHang' => $image ? $target_file : $getDanhSachNguoiDung['anhKhachHang'],
        'ngaysuaKhachHang' => date('Y-m-d H:i:s'),
        'nguoisuaKhachHang' => Session::data('user_admin')
      ];
      $this->province->updateUser($data, $id);
      $response = new Response();
      $response->redirect('danh-sach-nguoi-dung/trang-' . $page . '');
    } elseif (isset($_POST['lockedUser'])) {
      $id = $_POST['id'];
      $locked = $_POST['locked'];
      $data = [
        'khoataikhoanKhachHang' => $locked,
        'ngaysuaKhachHang' => date('Y-m-d H:i:s'),
        'nguoisuaKhachHang' => Session::data('user_admin')
      ];
      $this->province->updateUser($data, $id);
      $response = new Response();
      $response->redirect('danh-sach-nguoi-dung/trang-' . $page . '');
    }
    $this->data['body'] = 'admin/user/edit';
    $this->render('admin/layoutAdmin/admin_layout', $this->data);
  }
  public function detail_user($page, $id)
  {
    $getDanhSachNguoiDung = $this->province->getUserDetail($id);
    $this->data['sub_content']['getUserDetail'] = $getDanhSachNguoiDung;
    $title = 'Chi tiết người dùng #' . $getDanhSachNguoiDung['maKhachHang'];
    $this->data['pages_title'] = $title;
    $this->data['sub_content']['table_name'] = $title;
    $this->data['sub_content']['page'] = $page;
    $getNguoiTao = $this->province->getUserCreated($getDanhSachNguoiDung['nguoitaoKhachHang']);
    $this->data['sub_content']['getNguoiTao'] = $getNguoiTao;
    $getNguoiSua = $this->province->getUserUpdated($getDanhSachNguoiDung['nguoisuaKhachHang']);
    $this->data['sub_content']['getNguoiSua'] = $getNguoiSua;
    $getNguoiXoa = $this->province->getUserDeleted($getDanhSachNguoiDung['nguoixoaKhachHang']);
    $this->data['sub_content']['getNguoiXoa'] = $getNguoiXoa;
    $this->data['body'] = 'admin/user/detail';
    $this->render('admin/layoutAdmin/admin_layout', $this->data);
  }
  public function search_user($page)
  {
    $title = 'Mã người dùng tìm kiếm: #' . $_POST['searchUser'] . '';
    $this->data['pages_title'] = $title;
    $this->data['sub_content']['table_name'] = $title;
    $this->data['sub_content']['page'] = $page;
    if (isset($_POST['searchUser'])) {
      $keywordUser = $_POST['searchUser'];
      $checkKeyword = $this->province->getUserSearch($keywordUser);
      if ($checkKeyword) {
        $this->data['sub_content']['getUserSearch'] = $checkKeyword;
      } else {
        Session::flash('msg', 'Không tồn tại người dùng này!');
        $this->data['sub_content']['msg'] = Session::flash('msg');
      }
    } elseif (isset($_POST['delete'])) {
      $id = $_POST['id'];
      $data = [
        'xoaKhachHang' => 1,
        'ngayxoaKhachHang' => date('Y-m-d H:i:s'),
        'nguoixoaKhachHang' => Session::data('user_admin')
      ];
      $this->province->updateUser($data, $id);
      $response = new Response();
      $response->redirect('tim-kiem-nguoi-dung/trang-' . $page . '');
    } elseif (isset($_POST['restore'])) {
      $id = $_POST['id'];
      $data = [
        'xoaKhachHang' => 0,
        'nguoixoaKhachHang' => 0
      ];
      $this->province->updateUser($data, $id);
      $response = new Response();
      $response->redirect('tim-kiem-nguoi-dung/trang-' . $page . '');
    } elseif (isset($_POST['deleted'])) {
      $id = $_POST['id'];
      $this->province->deletedUser($id);
      $response = new Response();
      $response->redirect('tim-kiem-nguoi-dung/trang-' . $page . '');
    } else {
      $response = new Response();
      $response->redirect('danh-sach-nguoi-dung/trang-' . $page);
    }
    $this->data['body'] = 'admin/user/search';
    $this->render('admin/layoutAdmin/admin_layout', $this->data);
  }
}
