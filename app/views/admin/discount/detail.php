<!-- Table Start -->
<div class="container-fluid pt-4 px-4">
  <div class="row g-4">
    <div class="col-sm-12 col-xl-12">
      <div class="bg-secondary rounded h-100 p-4">
        <h6 class="mb-4"><?= isset($table_name) ? $table_name : 'Bảng chưa có tên' ?></h6>
        <div class="mb-3">
          <label class="mb-1">Người tạo</label>
          <h5 class="form-control bg-dark text-white">Lữ Phát Huy</h5>
        </div>
        <div class="mb-3">
          <label class="mb-1">Người sửa</label>
          <h5 class="form-control bg-dark text-white">Lữ Phát Huy</h5>
        </div>
        <div class="mb-3">
          <label class="mb-1">Ngày tạo</label>
          <h5 class="form-control bg-dark text-white">17/12/2023</h5>
        </div>
        <div class="mb-3">
          <label class="mb-1">Ngày hết hạn</label>
          <h5 class="form-control bg-dark text-white">01/01/2024</h5>
        </div>
        <div class="float-end mb-3">
          <a href="<?= (!empty(Session::data('keywordDiscount'))) ? 'tim-kiem-giam-gia' : 'danh-sach-giam-gia' ?>" class="btn btn-outline-info me-1">Trở lại</a>
        </div>
      </div>
    </div>
  </div>
</div>