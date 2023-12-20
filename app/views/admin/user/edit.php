<?php $item = $getUserDetail;
if (isset($item)) {
  extract($item);
?>
  <?php if ($item['phanquyenKhachHang'] == 2) : ?>
    <div class="container-fluid pt-4 px-4">
      <div class="row g-4">
        <div class="col-sm-12 col-xl-12">
          <div class="bg-secondary rounded h-100 p-4">
            <h6 class="mb-4"><?= isset($table_name) ? $table_name : 'Bảng chưa có tên' ?></h6>
            <form action="" enctype='multipart/form-data' method="post">
              <a href="<?= _WEB_ROOT . '/' . $anhKhachHang ?>" target="_blank"><img src="<?= _WEB_ROOT . '/' . $anhKhachHang ?>" alt="" width="100"></a>
              <div class="mb-3 mt-3">
                <label for="floatingInput" class="form-label small">Ảnh <span class="text-danger">*</span></label>
                <input class="form-control bg-dark" name="image" accept='image/png, image/jpeg, image/jpg' type="file" id="floatingInput">
              </div>
              <div class="form-floating mb-3">
                <input type="text" name="name" value="<?= $tenKhachHang ?>" class="form-control" id="floatingInput" placeholder="">
                <label for="floatingInput" class="small">Họ tên <span class="text-danger">*</span></label>
              </div>
              <div class="float-end mb-3">
                <a href="<?= _WEB_ROOT . '/danh-sach-nguoi-dung/trang-' . $page ?>" class="btn btn-outline-info me-1">Trở lại</a>
                <input type="hidden" value="<?= $id ?>" name="id">
                <input type="hidden" value="<?= $anhKhachHang ?>" name="imageDefault">
                <button type="submit" name="editUser" class="btn btn-outline-danger">Lưu</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  <?php else : ?>
    <!-- Table Start -->
    <div class="container-fluid pt-4 px-4">
      <div class="row g-4">
        <div class="col-sm-12 col-xl-12">
          <div class="bg-secondary rounded h-100 p-4">
            <h6 class="mb-4">Chỉnh sửa trạng thái tài khoản người dùng #<?= $getUserDetail['maKhachHang'] ?></h6>
            <form action="" method="post">
              <div class="form-floating mb-3">
                <select class="form-select" name="locked" id="floatingSelect" aria-label="Floating label select example">
                  <option value="0" <?= $khoataikhoanKhachHang == 0 ? 'selected' : false ?>>Kích hoạt</option>
                  <option value="1" <?= $khoataikhoanKhachHang == 1 ? 'selected' : false ?>>Khóa tài khoản</option>
                </select>
                <label for="floatingSelect">Trạng thái</label>
              </div>
              <div class="float-end mb-3">
                <a href="<?= _WEB_ROOT . '/danh-sach-nguoi-dung/trang-' . $page ?>" class="btn btn-outline-info me-1">Trở lại</a>
                <input type="hidden" value="<?= $id ?>" name="id">
                <button type="submit" name="lockedUser" class="btn btn-outline-danger">Lưu</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  <?php endif ?>
<?php } ?>