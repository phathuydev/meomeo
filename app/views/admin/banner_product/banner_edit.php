<!-- Table Start -->
<div class="container-fluid pt-4 px-4">
  <div class="row g-4">
    <div class="col-sm-12 col-xl-12">
      <div class="bg-secondary rounded h-100 p-4">
        <h6 class="mb-4"><?= isset($table_name) ? $table_name : 'Bảng chưa có tên' ?></h6>
        <form action="" method="post">
          <div class="mb-3">
            <label for="floatingInput" class="form-label"><a href="https://thichthucung.com/wp-content/uploads/meo-my-duoi-coc-bobtail-mau-trang.jpg" target="_blank"><img src="https://thichthucung.com/wp-content/uploads/meo-my-duoi-coc-bobtail-mau-trang.jpg" width="100" class="me-2" alt=""></a></label>
            <input class="form-control bg-dark" type="file" id="floatingInput">
          </div>
          <div class="float-end mb-3">
            <a href="<?= _WEB_ROOT ?>/danh-sach-san-pham" class="btn btn-outline-info me-1">Trở lại</a>
            <button type="submit" name="" class="btn btn-outline-danger">Lưu</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>