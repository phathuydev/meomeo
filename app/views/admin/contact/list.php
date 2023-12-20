<!-- Table Start -->
<div class="container-fluid pt-4 px-4">
  <div class="row g-4">
    <div class="col-sm-12 col-xl-12">
      <div class="bg-secondary rounded h-100 p-4">
        <h6 class="mb-4"><?= isset($table_name) ? $table_name : 'Bảng chưa có tên' ?></h6>
        <div class="table-responsive">
          <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">STT</th>
                <th scope="col">Tên khách hàng</th>
                <th scope="col">Email</th>
                <th scope="col">Nội dung liên hệ</th>
                <th scope="col">Hành động</th>
              </tr>
            </thead>
            <tbody>
              <tr class="align-baseline">
                <td>1</td>
                <td>Lữ Phát Huy</td>
                <td>huylppc05334@fpt.edu.vn</td>
                <td>Xin chào</td>
                <td>
                  <a class="btn btn-outline-info mb-1" href="https://mail.google.com" target="_blank">Chi tiết</a>
                </td>
              </tr>
            </tbody>
          </table>
          <div class="product__pagination mb-3">
            <a href="#" class="bg-danger">1</a>
            <a href="#">2</a>
            <a href="#">3</a>
            <a href="#"><i class="fa fa-long-arrow-right"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Table End -->