<?php
date_default_timezone_set('Asia/Ho_Chi_Minh'); // Set default time zone
// Kế thừa từ class Model
class CategoriesProductModel extends Model
{
  private $__table = "danhmucsanpham";
  // Định nghĩa table trong Model
  function tableFill()
  {
    return 'danhmucsanpham';
  }
  function fieldFill()
  {
    return '*';
  }
  public function getNameCategories()
  {
    $data = $this->db->table('danhmucsanpham')
      ->first();
    return $data;
  }
  public function getName($name)
  {
    $data = $this->db->table('danhmucsanpham')
      ->where('tenDanhMuc', '=', $name)
      ->first();
    return $data;
  }
  public function getCategoriesSearch($keywordCategories)
  {
    $data = $this->db->table('danhmucsanpham')
      ->whereLike('tenDanhMuc', '%' . $keywordCategories . '%')
      ->orderBy('ngaytaoDanhMuc', 'DESC')
      ->get();
    return $data;
  }
  public function getAllCategoriesProduct($perPage, $page)
  {
    $data = $this->db->table('danhmucsanpham')
      ->limit($perPage, $page)
      ->orderBy('ngaytaoDanhMuc', 'DESC')
      ->get();
    return $data;
  }
  public function getCategoriesProductDetail($id)
  {
    $data = $this->db->table('danhmucsanpham')
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
  public function countAllCategoriesProduct()
  {
    $data = $this->db->table('danhmucsanpham')
      ->select('COUNT(id) as countAllCategoriesProduct')
      ->first();
    return $data;
  }
  public function insertCategoriesProduct($data)
  {
    $this->db->table('danhmucsanpham')
      ->insert($data);
  }
  public function updateCategories($data, $id)
  {
    $this->db->table('danhmucsanpham')
      ->where('id', '=', $id)
      ->update($data);
  }
  public function deleteCategories($id)
  {
    $this->db->table('danhmucsanpham')
      ->where('id', '=', $id)
      ->delete();
  }
}
