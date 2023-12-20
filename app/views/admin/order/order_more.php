<!-- Table Start -->
<div class="container-fluid pt-4 px-4">
  <div class="row g-4">
    <div class="col-sm-12 col-xl-12">
      <div class="bg-secondary rounded h-100 p-4">
        <h6 class="mb-4"><?= isset($table_name) ? $table_name : 'Bảng chưa có tên' ?></h6>
        <div class="mb-3">
          <label class="mb-1">Email</label>
          <h5 class="form-control bg-dark text-white">huylppc05334@fpt.edu.vn</h5>
        </div>
        <div class="mb-3">
          <label class="mb-1">Số điện thoại</label>
          <h5 class="form-control bg-dark text-white">0945567048</h5>
        </div>
        <div class="mb-3">
          <label class="mb-1">Địa chỉ</label>
          <h5 class="form-control bg-dark text-white">11A, Đông Hưng B, An Minh, Kiên Giang</h5>
        </div>
        <div class="mb-3">
          <label class="mb-1">Tổng tiền thanh toán</label>
          <h5 class="form-control bg-dark text-white">7.000.000 VNĐ</h5>
        </div>
        <div class="mb-3">
          <label class="mb-1">Ngày đặt hàng</label>
          <h5 class="form-control bg-dark text-white">2 ngày trước</h5>
        </div>
        <div class="mb-3">
          <label class="mb-1">Ngày sửa địa chỉ</label>
          <h5 class="form-control bg-dark text-white">Không có</h5>
        </div>
        <div class="mb-3">
          <label class="mb-1">Hình thức thanh toán</label>
          <h5 class="form-control bg-dark text-white">Chuyển khoản</h5>
        </div>
        <div class="float-end mb-3">
          <a href="<?= _WEB_ROOT ?>/danh-sach-don-hang" class="btn btn-outline-info me-1">Trở lại</a>
        </div>
      </div>
    </div>
  </div>
</div>