<!-- Table Start -->
<div class="container-fluid pt-4 px-4">
  <div class="row g-4">
    <div class="col-sm-12 col-xl-12">
      <div class="bg-secondary rounded h-100 p-4">
        <h6 class="mb-4"><?= isset($table_name) ? $table_name : 'Bảng chưa có tên' ?></h6>
        <form action="" method="post">
          <div class=" mb-3">
            <label for="floatingInput" class="form-label">Mã sản phẩm <span class="text-danger">*</span></label>
            <input type="text" class="form-control" id="floatingInput" placeholder="VD: MM2234">
          </div>
          <div class="mb-3">
            <label for="floatingInput" class="form-label"><a href="https://thichthucung.com/wp-content/uploads/meo-my-duoi-coc-bobtail-mau-trang.jpg" target="_blank"><img src="https://thichthucung.com/wp-content/uploads/meo-my-duoi-coc-bobtail-mau-trang.jpg" width="100" class="me-2" alt=""></a></label>
            <input class="form-control bg-dark" type="file" id="floatingInput">
          </div>
          <div class="mb-3">
            <label for="floatingInput" class="form-label">Tên sản phẩm <span class="text-danger">*</span></label>
            <input type="text" class="form-control" id="floatingInput" placeholder="VD: Mèo Tam Thể">
          </div>
          <div class="mb-3">
            <label for="floatingInput" class="form-label">Cân nặng <span class="text-danger">*</span></label>
            <input type="text" class="form-control" id="floatingInput" placeholder="VD: 3.4kg">
          </div>
          <div class="mb-3">
            <label for="floatingInput" class="form-label">Giá <span class="text-danger">*</span></label>
            <input type="number" class="form-control" min="1" id="floatingInput" placeholder="VD: 5.000.000">
          </div>
          <div class="mb-3">
            <label for="floatingInput" class="form-label">Giá giảm</label>
            <input type="number" class="form-control" min="1" id="floatingInput" placeholder="VD: 4.000.000">
          </div>
          <div class="mb-3">
            <label for="floatingInput" class="form-label">Giá vận chuyển</label>
            <input type="number" class="form-control" min="1" id="floatingInput" placeholder="VD: 45.000 hoặc để trống">
          </div>
          <div class="mb-3">
            <label for="floatingSelect" class="form-label">Danh mục <span class="text-danger">*</span></label>
            <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
              <option value="1">Kích hoạt</option>
              <option value="2">Khóa tài khoản</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="floatingInput" class="form-label">Mô tả sản phẩm</label>
            <textarea type="text" class="form-control" id="floatingInput" placeholder="VD: Mèo này xuất sứ từ việt nam, ăn như con heo"></textarea>
          </div>
          <div class="float-end mb-3">
            <a href="<?= (!empty(Session::data('keywordProduct'))) ? 'tim-kiem-san-pham' : 'danh-sach-san-pham' ?>" class="btn btn-outline-info me-1">Trở lại</a>
            <button type="submit" name="addUser" class="btn btn-outline-danger">Lưu</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>