<!-- Table Start -->
<div class="container-fluid pt-4 px-4">
  <div class="row g-4">
    <div class="col-sm-12 col-xl-12">
      <div class="bg-secondary rounded h-100 p-4">
        <h6 class="mb-4"><?= isset($table_name) ? $table_name : 'Bảng chưa có tên' ?></h6>
        <div class="table-responsive">
          <table class="table table-striped">
            <form action="" method="post">
              <thead>
                <tr>
                  <th scope="col">Mã giảm giá</th>
                  <th scope="col">Ảnh</th>
                  <th scope="col">Số lượng</th>
                  <th scope="col">Mô tả</th>
                  <th scope="col">Hành động</th>
                </tr>
              </thead>
              <tbody>
                <tr class="align-baseline">
                  <td>#MGG3540</td>
                  <td><a href="https://media.tuha.vn/upload/default/cach%20tinh%20giam%20gia.jpg" target="_blank" rel="noopener noreferrer"><img src="https://media.tuha.vn/upload/default/cach%20tinh%20giam%20gia.jpg" width="50" alt=""></a></td>
                  <td>7 mã</td>
                  <td>Giảm 50% cho các đơn hàng từ 15.000.000 VNĐ</td>
                  <td>
                    <a href="<?= _WEB_ROOT ?>/chi-tiet-giam-gia" class="btn btn-outline-warning mb-1">Xem thêm</a>
                    <a href="<?= _WEB_ROOT ?>/sua-giam-gia" class="btn btn-outline-info mb-1">Sửa</a>
                    <button type="submit" name="" onclick="return confirm('Xóa danh mục này?')" class="btn btn-outline-danger mb-1">Ẩn</button>
                  </td>
                </tr>
              </tbody>
            </form>
          </table>
          <div class="float-end">
            <form class="me-1" method="post">
              <input class="form-control" type="search" name="searchProduct" placeholder="Nhập mã giảm giá">
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Table End -->