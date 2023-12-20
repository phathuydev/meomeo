<!-- Table Start -->
<div class="container-fluid pt-4 px-4">
  <div class="row g-4">
    <div class="col-sm-12 col-xl-12">
      <div class="bg-secondary rounded h-100 p-4">
        <h6 class="mb-4"><?= isset($table_name) ? $table_name : 'Bảng chưa có tên' ?></h6>
        <form action="" enctype='multipart/form-data' method="post">
          <div class="mb-3">
            <label for="floatingInput" class="form-label small">Ảnh <span class="text-danger">*</span></label>
            <input class="form-control bg-dark" name="image" accept='image/png, image/jpeg, image/jpg' type="file" id="floatingInput">
          </div>
          <div class="form-floating mb-3">
            <input type="hidden" name="code" value="<?= $generateOrderCode ?>" class="form-control" id="floatingInput" placeholder="">
          </div>
          <div class="form-floating mb-3">
            <input type="text" name="name" class="form-control" id="floatingInput" placeholder="">
            <label for="floatingInput" class="small">Họ tên <span class="text-danger">*</span></label>
          </div>
          <div class="form-floating mb-3">
            <input type="email" name="email" class="form-control" id="floatingInput" placeholder="">
            <label for="floatingInput" class="small">Email <span class="text-danger">*</span></label>
          </div>
          <div class="form-floating mb-3">
            <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="">
            <label for="floatingPassword" class="small">Mật khẩu <span class="text-danger">*</span></label>
          </div>
          <div class="float-end mb-3">
            <a href="<?= _WEB_ROOT ?>/danh-sach-nguoi-dung/trang-1" class="btn btn-outline-info me-1">Trở lại</a>
            <button type="submit" name="addUser" class="btn btn-outline-danger">Thêm</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>