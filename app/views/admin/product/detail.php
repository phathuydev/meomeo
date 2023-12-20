<!-- Table Start -->
<div class="container-fluid pt-4 px-4">
  <div class="row g-4">
    <div class="col-sm-12 col-xl-12">
      <div class="bg-secondary rounded h-100 p-4">
        <h6 class="mb-4"><?= isset($table_name) ? $table_name : 'Bảng chưa có tên' ?></h6>
        <div class="mb-3">
          <label class="mb-1">Danh mục</label>
          <h5 class="form-control bg-dark text-white">Mèo mỹ</h5>
        </div>
        <div class="mb-3">
          <label class="mb-1">Số lượng</label>
          <h5 class="form-control bg-dark text-white">14 con</h5>
        </div>
        <div class="mb-3">
          <label class="mb-1">Người tạo</label>
          <h5 class="form-control bg-dark text-white">Lữ Phát Huy</h5>
        </div>
        <div class="mb-3">
          <label class="mb-1">Người Sửa</label>
          <h5 class="form-control bg-dark text-white">Lữ Phát Huy</h5>
        </div>
        <div class="mb-3">
          <label class="mb-1">Ngày Tạo</label>
          <h5 class="form-control bg-dark text-white">10 ngày trước</h5>
        </div>
        <div class="mb-3">
          <label class="mb-1">Ngày sửa</label>
          <h5 class="form-control bg-dark text-white">2 ngày trước</h5>
        </div>
        <div class="float-end mb-3">
          <a href="<?= (!empty(Session::data('keywordProduct'))) ? 'tim-kiem-san-pham' : 'danh-sach-san-pham' ?>" class="btn btn-outline-info me-1">Trở lại</a>
        </div>
      </div>
    </div>
  </div>
</div>