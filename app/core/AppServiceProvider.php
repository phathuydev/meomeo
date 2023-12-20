<?php
date_default_timezone_set('Asia/Ho_Chi_Minh'); // Set default time zone
class AppServiceProvider extends ServiceProvider
{
  public function boot()
  {
    function formatTimeAgo($timestamp)
    {
      $currentTimestamp = time();
      $difference = $currentTimestamp - $timestamp;

      $seconds = $difference;
      $minutes = round($difference / 60);
      $hours = round($difference / 3600);
      $days = round($difference / 86400);

      if ($seconds < 60) {
        return $seconds . " giây trước";
      } elseif ($minutes < 60) {
        return $minutes . " phút trước";
      } elseif ($hours < 24) {
        return $hours . " giờ trước";
      } elseif ($days < 30) {
        return $days . " ngày trước";
      } else {

        $months = round($days / 30);
        $years = round($days / 365);

        if ($months < 12) {
          return $months . " tháng trước";
        } else {
          return $years . " năm trước";
        }
      }
    }
    function generateOrderCode()
    {
      $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
      $codeLength = 6;
      $code = '';
      for ($i = 0; $i < $codeLength; $i++) {
        $code .= $characters[rand(0, strlen($characters) - 1)];
      }
      return $code;
    }
    $data['generateOrderCode'] = generateOrderCode();
    $getUserAdmin = $this->db->table('khachhang')
      ->select('*')
      ->where('id', '=', Session::data('user_admin'))
      ->first();
    $data['getUserAdmin'] = $getUserAdmin;
    View::share($data);
  }
}
