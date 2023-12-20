<!-- Table Start -->
<div class="container-fluid pt-4 px-4">
  <div class="row g-4">
    <div class="col-sm-12 col-xl-12">
      <div class="bg-secondary rounded h-100 p-4">
        <h6 class="mb-4"><?= isset($table_name) ? $table_name : 'Bảng chưa có tên' ?></h6>
        <form action="" method="post">
          <div class="mb-3">
            <input class="form-control bg-dark" type="file" id="floatingInput" multiple>
          </div>
          <div class="float-end mb-3">
            <a href="<?= _WEB_ROOT ?>/danh-sach-bang-ron" class="btn btn-outline-info me-1">Trở lại</a>
            <button type="submit" name="" class="btn btn-outline-danger">Lưu</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>