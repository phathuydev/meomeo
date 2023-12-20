<!-- Table Start -->
<div class="container-fluid pt-4 px-4">
  <div class="row g-4">
    <div class="col-sm-12 col-xl-12">
      <div class="bg-secondary rounded h-100 p-4">
        <h6 class="mb-4"><?= isset($table_name) ? $table_name : 'Bảng chưa có tên' ?></h6>
        <?= $msg ? '<p class="text-danger">' . $msg . '</p>' : false; ?>
        <form action="" method="post">
          <div class=" mb-3">
            <label for="floatingInput" class="form-label">Tên danh mục <span class="text-danger">*</span></label>
            <input type="text" class="form-control" name="nameCategoriesPost" id="floatingInput" placeholder="VD: Mèo Ai Cập">
          </div>
          <div class="float-end mb-3">
            <a href="<?= _WEB_ROOT ?>/danh-sach-danh-muc-baiviet/trang-1" class="btn btn-outline-info me-1">Trở lại</a>
            <button type="submit" name="addCategoriesPost" class="btn btn-outline-danger">Thêm</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>