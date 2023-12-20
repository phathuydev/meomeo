<!-- Table Start -->
<div class="container-fluid pt-4 px-4">
  <div class="row g-4">
    <div class="col-sm-12 col-xl-12">
      <div class="bg-secondary rounded h-100 p-4">
        <h6 class="mb-4"><?= isset($table_name) ? $table_name : 'Bảng chưa có tên' ?></h6>
        <div class="table-responsive">
          <table class="table table-striped">
            <form action="" method="post">
              <a href="<?= _WEB_ROOT ?>/them-san-pham" class="btn mb-3 btn-outline-light text-white">Thêm</a>
              <thead>
                <tr>
                  <th scope="col">Mã sản phẩm</th>
                  <th scope="col">Sản phẩm</th>
                  <th scope="col">Giá</th>
                  <th scope="col">Giá giảm</th>
                  <th scope="col">Băng rôn</th>
                  <th scope="col">Hành động</th>
                </tr>
              </thead>
              <tbody>
                <tr class="align-baseline">
                  <td>#MM05334</td>
                  <td><a href="https://thichthucung.com/wp-content/uploads/meo-my-duoi-coc-bobtail-mau-trang.jpg" target="_blank"><img src="https://thichthucung.com/wp-content/uploads/meo-my-duoi-coc-bobtail-mau-trang.jpg" width="75" class="me-2" alt=""></a> Mèo tam thể</td>
                  <td>3.500.000 VNĐ</td>
                  <td>3.300.000 VNĐ</td>
                  <td>3 ảnh <a href="<?= _WEB_ROOT ?>/chi-tiet-bang-ron-san-pham"><i class="fa fa-eye"></i></a></td>
                  <td>
                    <a href="<?= _WEB_ROOT ?>/san-pham-chi-tiet" class="btn btn-outline-warning mb-1">Xem thêm</a>
                    <a href="<?= _WEB_ROOT ?>/sua-san-pham" class="btn btn-outline-info mb-1">Sửa</a>
                    <button type="submit" name="" onclick="return confirm('Ẩn sản phẩm này?')" class="btn btn-outline-danger mb-1">Ẩn</button>
                  </td>
                </tr>
              </tbody>
            </form>
          </table>
          <div class="d-flex justify-content-between align-items-center">
            <div class="product__pagination mb-3">
              <a href="#" class="bg-danger">1</a>
              <a href="#">2</a>
              <a href="#">3</a>
              <a href="#"><i class="fa fa-long-arrow-right"></i></a>
            </div>
            <form class="me-1" method="post">
              <input class="form-control" type="search" name="searchProduct" placeholder="Nhập mã sản phẩm">
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Table End -->