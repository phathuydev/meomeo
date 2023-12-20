<!-- Table Start -->
<div class="container-fluid pt-4 px-4">
  <div class="row g-4">
    <div class="col-sm-12 col-xl-12">
      <?php $item = $getUserDetail;
      if (isset($item)) {
        extract($item);
      ?>
        <div class="bg-secondary rounded h-100 p-4">
          <h6 class="mb-4"><?= isset($table_name) ? $table_name : 'Bảng chưa có tên' ?></h6>
          <div>
            <label class="mb-1">Ảnh</label>
          </div>
          <a href="<?= _WEB_ROOT . '/' . $anhKhachHang ?>" target="_blank"><img src="<?= _WEB_ROOT . '/' . $anhKhachHang ?>" width="100" alt=""></a>
          <div class="mb-3 mt-3">
            <label class="mb-1">Email</label>
            <h5 class="form-control bg-dark text-white"><?= $emailKhachHang ?></h5>
          </div>
          <div class="mb-3">
            <label class="mb-1">Số điện thoại</label>
            <h5 class="form-control bg-dark text-white"><?= (isset($sodienthoaiKhachHang)) ? $sodienthoaiKhachHang : 'Chưa cập nhật' ?></h5>
          </div>
          <div class="mb-3">
            <label class="mb-1">Địa chỉ</label>
            <h5 class="form-control bg-dark text-white"><?= (isset($diachiKhachHang)) ? $diachiKhachHang : 'Chưa cập nhật' ?></h5>
          </div>
          <div class="mb-3">
            <label class="mb-1">Liên kết</label>
            <h5 class="form-control bg-dark text-white">
              <a href="<?= $facebookKhachHang ?>" class="me-2" target="_blank"><i class="fa-brands fa-facebook" style="color: #0070ff; font-size: 15px;"></i></a>
              <a href="<?= $instagramKhachHang ?>" class="me-2" target="_blank"><i class="fa-brands fa-instagram" style="color: #ff0068; font-size: 15px;"></i></a>
              <a href="<?= $tiktokKhachHang ?>" target="_blank"><i class="fa-brands fa-tiktok" style="color: #ffffff; font-size: 15px;"></i></a>
            </h5>
          </div>
          <div class="mb-3">
            <label class="mb-1">Người tạo</label>
            <?php $item1 = $getNguoiTao;
            if (isset($item1)) {
            ?>
              <h5 class="form-control bg-dark text-white"><?= (isset($item1['tenKhachHang'])) ? $item1['tenKhachHang'] : 'Chưa cập nhật' ?></h5>
            <?php } ?>
          </div>
          <div class="mb-3">
            <label class="mb-1">Lịch sử người sửa</label>
            <?php $item2 = $getNguoiSua;
            if (isset($item2)) {
            ?>
              <h5 class="form-control bg-dark text-white"><?= (isset($item2['tenKhachHang'])) ? $item2['tenKhachHang'] : 'Chưa cập nhật' ?></h5>
            <?php } ?>
          </div>
          <div class="mb-3">
            <label class="mb-1">Lịch sử người Xóa</label>
            <?php $item3 = $getNguoiXoa;
            if (isset($item3)) {
            ?>
              <h5 class="form-control bg-dark text-white"><?= (isset($item3['tenKhachHang'])) ? $item3['tenKhachHang'] : 'Chưa cập nhật' ?></h5>
            <?php } ?>
          </div>
          <div class="mb-3">
            <label class="mb-1">Lịch sử sửa</label>
            <h5 class="form-control bg-dark text-white"><?= (isset($ngaysuaKhachHang)) ? formatTimeAgo(strtotime($ngaysuaKhachHang)) : 'Chưa cập nhật' ?></h5>
          </div>
          <div class="mb-3">
            <label class="mb-1">Lịch sử xóa</label>
            <h5 class="form-control bg-dark text-white"><?= (isset($ngayxoaKhachHang)) ? formatTimeAgo(strtotime($ngayxoaKhachHang)) : 'Chưa cập nhật' ?></h5>
          </div>
          <div class="float-end mb-3">
            <a href="<?= _WEB_ROOT . '/danh-sach-nguoi-dung/trang-' . $page ?>" class="btn btn-outline-info me-1">Trở lại</a>
          </div>
        </div>
      <?php } ?>
    </div>
  </div>
</div>