<!-- Table Start -->
<div class="container-fluid pt-4 px-4">
  <div class="row g-4">
    <div class="col-sm-12 col-xl-12">
      <div class="bg-secondary rounded h-100 p-4">
        <h6 class="mb-4"><?= isset($table_name) ? $table_name : 'Bảng chưa có tên' ?></h6>
        <form action="" method="post">
          <div class="form-floating mb-3">
            <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
              <option value="1">Chờ xác nhận</option>
              <option value="2">Đang chuẩn bị</option>
            </select>
            <label for="floatingSelect">Trạng thái vận chuyển</label>
          </div>
          <div class="float-end mb-3">
            <a href="<?= _WEB_ROOT ?>/danh-sach-don-hang" class="btn btn-outline-info me-1">Trở lại</a>
            <button type="submit" name="" class="btn btn-outline-danger">Lưu</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>