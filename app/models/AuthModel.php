<?php
date_default_timezone_set('Asia/Ho_Chi_Minh'); // Set default time zone
// Kế thừa từ class Model
class AuthModel extends Model
{
  private $__table = "khachhang";
  // Định nghĩa table trong Model
  function tableFill()
  {
    return 'khachhang';
  }
  function fieldFill()
  {
    return '*';
  }
  public function getUserLogin($email)
  {
    $data = $this->db->table('khachhang')
      ->where('emailKhachHang', '=', $email)
      ->first();
    return $data;
  }
}
