<?php $item = $getDetail;
if (isset($item)) {
  extract($item);
?>
  <div class="container-fluid pt-4 px-4">
    <div class="row g-4">
      <div class="col-sm-12 col-xl-12">
        <div class="bg-secondary rounded h-100 p-4">
          <h6 class="mb-4"><?= isset($table_name) ? $table_name : 'Bảng chưa có tên' ?></h6>
          <?= $msg ? '<p class="text-danger">' . $msg . '</p>' : false ?>
          <form action="" method="post">
            <div class="mb-3">
              <label for="floatingInput" class="form-label">Tên danh mục <span class="text-danger">*</span></label>
              <input type="hidden" class="form-control" name="id" id="floatingInput" value="<?= $id ?>">
              <input type="text" class="form-control" name="nameCategoriesProduct" id="floatingInput" value="<?= $tenDanhMuc ?>">
              <input type="hidden" class="form-control" name="nameCategoriesProductDefault" id="floatingInput" value="<?= $tenDanhMuc ?>">
            </div>
            <div class="float-end mb-3">
              <a href="<?= _WEB_ROOT ?>/danh-sach-danh-muc-san-pham/trang-<?= $page ?>" class="btn btn-outline-info me-1">Trở lại</a>
              <button type="submit" name="editCategoriesProduct" class="btn btn-outline-danger">Lưu</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
<?php } ?>