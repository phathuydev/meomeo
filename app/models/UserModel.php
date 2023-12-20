<?php
date_default_timezone_set('Asia/Ho_Chi_Minh'); // Set default time zone
// Kế thừa từ class Model
class UserModel extends Model
{
  private $__table = "users";
  // Định nghĩa table trong Model
  function tableFill()
  {
    return 'users';
  }
  function fieldFill()
  {
    return '*';
  }
  public function getUserCodeAndEmail()
  {
    $data = $this->db->table('khachhang')
      ->first();
    return $data;
  }
  public function getAllUser($perPage, $page)
  {
    $data = $this->db->table('khachhang')
      ->limit($perPage, $page)
      ->orderBy('ngaytaoKhachHang', 'DESC')
      ->get();
    return $data;
  }
  public function getUserSearch($keywordUser)
  {
    $data = $this->db->table('khachhang')
      ->where('maKhachHang', '=', $keywordUser)
      ->first();
    return $data;
  }
  public function getUserDetail($id)
  {
    $data = $this->db->table('khachhang')
      ->where('id', '=', $id)
      ->first();
    return $data;
  }
  public function getUserCreated($nguoitao)
  {
    $data = $this->db->table('khachhang')
      ->where('id', '=', $nguoitao)
      ->first();
    return $data;
  }
  public function getUserUpdated($nguoisua)
  {
    $data = $this->db->table('khachhang')
      ->where('id', '=', $nguoisua)
      ->first();
    return $data;
  }
  public function getUserDeleted($nguoixoa)
  {
    $data = $this->db->table('khachhang')
      ->where('id', '=', $nguoixoa)
      ->first();
    return $data;
  }
  public function countAllUser()
  {
    $data = $this->db->table('khachhang')
      ->select('COUNT(id) as countAllUser')
      ->first();
    return $data;
  }
  public function insertUser($data)
  {
    $this->db->table('khachhang')
      ->insert($data);
  }
  public function updateUser($data, $id)
  {
    $this->db->table('khachhang')
      ->where('id', '=', $id)
      ->update($data);
  }
  public function deletedUser($id)
  {
    $this->db->table('khachhang')
      ->where('id', '=', $id)
      ->delete();
  }
}
