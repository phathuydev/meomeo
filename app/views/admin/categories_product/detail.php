<?php $item = $getDetail;
if (isset($item)) {
  extract($item);
?>
  <div class="container-fluid pt-4 px-4">
    <div class="row g-4">
      <div class="col-sm-12 col-xl-12">
        <div class="bg-secondary rounded h-100 p-4">
          <h6 class="mb-4"><?= isset($table_name) ? $table_name : 'Bảng chưa có tên' ?></h6>
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
            <label class="mb-1">Lịch sử ngày sửa</label>
            <h5 class="form-control bg-dark text-white"><?= (isset($ngaysuaDanhMuc)) ? formatTimeAgo(strtotime($ngaysuaDanhMuc)) : 'Chưa cập nhật' ?></h5>
          </div>
          <div class="mb-3">
            <label class="mb-1">Lịch sử ngày xóa</label>
            <h5 class="form-control bg-dark text-white"><?= (isset($ngayxoaDanhMuc)) ? formatTimeAgo(strtotime($ngayxoaDanhMuc)) : 'Chưa cập nhật' ?></h5>
          </div>
          <div class="float-end mb-3">
            <a href="<?= _WEB_ROOT ?>/danh-sach-danh-muc-san-pham/trang-1" class="btn btn-outline-info me-1">Trở lại</a>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php } ?>