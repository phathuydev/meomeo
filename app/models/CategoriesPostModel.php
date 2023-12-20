<?php
date_default_timezone_set('Asia/Ho_Chi_Minh'); // Set default time zone
// Kế thừa từ class Model
class CategoriesPostModel extends Model
{
  private $__table = "danhmucbaiviet";
  // Định nghĩa table trong Model
  function tableFill()
  {
    return 'danhmucbaiviet';
  }
  function fieldFill()
  {
    return '*';
  }
  public function getNameCategories()
  {
    $data = $this->db->table('danhmucbaiviet')
      ->first();
    return $data;
  }
  public function getName($name)
  {
    $data = $this->db->table('danhmucbaiviet')
      ->where('tenDanhMuc', '=', $name)
      ->first();
    return $data;
  }
  public function getCategoriesSearch($keywordCategories)
  {
    $data = $this->db->table('danhmucbaiviet')
      ->whereLike('tenDanhMuc', '%' . $keywordCategories . '%')
      ->orderBy('ngaytaoDanhMuc', 'DESC')
      ->get();
    return $data;
  }
  public function getAllCategoriesPost($perPage, $page)
  {
    $data = $this->db->table('danhmucbaiviet')
      ->limit($perPage, $page)
      ->orderBy('ngaytaoDanhMuc', 'DESC')
      ->get();
    return $data;
  }
  public function getCategoriesPostDetail($id)
  {
    $data = $this->db->table('danhmucbaiviet')
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
  public function countAllCategoriesPost()
  {
    $data = $this->db->table('danhmucbaiviet')
      ->select('COUNT(id) as countAllCategoriesPost')
      ->first();
    return $data;
  }
  public function insertCategoriesPost($data)
  {
    $this->db->table('danhmucbaiviet')
      ->insert($data);
  }
  public function updateCategories($data, $id)
  {
    $this->db->table('danhmucbaiviet')
      ->where('id', '=', $id)
      ->update($data);
  }
  public function deleteCategories($id)
  {
    $this->db->table('danhmucbaiviet')
      ->where('id', '=', $id)
      ->delete();
  }
}
