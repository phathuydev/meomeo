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
                  <th scope="col">STT</th>
                  <th scope="col">Sản phẩm</th>
                  <th scope="col">Giá</th>
                  <th scope="col">Số lượng</th>
                  <th scope="col">Tổng tiền</th>
                </tr>
              </thead>
              <tbody>
                <tr class="align-baseline">
                  <td>1</td>
                  <td><a href="https://thichthucung.com/wp-content/uploads/meo-my-duoi-coc-bobtail-mau-trang.jpg" target="_blank"><img src="https://thichthucung.com/wp-content/uploads/meo-my-duoi-coc-bobtail-mau-trang.jpg" width="75" class="me-2" alt=""></a> Mèo tam thể</td>
                  <td>3.500.000 VNĐ</td>
                  <td>2 Con</td>
                  <td>7.000.000 VNĐ</td>
                </tr>
              </tbody>
            </form>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Table End -->