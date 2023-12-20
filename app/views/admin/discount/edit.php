<!-- Table Start -->
<div class="container-fluid pt-4 px-4">
  <div class="row g-4">
    <div class="col-sm-12 col-xl-12">
      <div class="bg-secondary rounded h-100 p-4">
        <h6 class="mb-4"><?= isset($table_name) ? $table_name : 'Bảng chưa có tên' ?></h6>
        <form action="" method="post">
          <div class=" mb-3">
            <label for="floatingInput" class="form-label">Mã giảm giá <span class="text-danger">*</span></label>
            <input type="text" class="form-control" id="floatingInput" value="">
          </div>
          <div class="mb-3">
            <label for="floatingInput" class="form-label">Ngày bắt đầu <span class="text-danger">(17/12/2023)</span></label>
            <input type="date" class="form-control" id="floatingInput">
          </div>
          <div class="mb-3">
            <label for="floatingInput" class="form-label">Ngày hết hạn <span class="text-danger">(01/01/2024)</span></label>
            <input type="date" class="form-control" id="floatingInput">
          </div>
          <div class="float-end mb-3">
            <a href="<?= (!empty(Session::data('keywordDiscount'))) ? 'tim-kiem-giam-gia' : 'danh-sach-giam-gia' ?>" class="btn btn-outline-info me-1">Trở lại</a>
            <button type="submit" name="" class="btn btn-outline-danger">Thêm</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>