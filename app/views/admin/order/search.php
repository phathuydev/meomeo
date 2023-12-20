<!-- Table Start -->
<div class="container-fluid pt-4 px-4">
  <div class="row g-4">
    <div class="col-sm-12 col-xl-12">
      <div class="bg-secondary rounded h-100 p-4">
        <h6 class="mb-4"><?= isset($table_name) ? $table_name : 'Bảng chưa có tên' ?></h6>
        <div class="table-responsive">
          <table class="table table-striped">
            <a href="<?= (!empty(Session::data('keywordOrder'))) ? 'tim-kiem-don-hang' : 'danh-sach-don-hang' ?>" class="btn btn-outline-light text-white mb-3">Trở lại</a>
            <form action="" method="post">
              <thead>
                <tr>
                  <th scope="col">Mã đơn hàng</th>
                  <th scope="col">khách hàng</th>
                  <th scope="col">Trạng thái vận chuyển</th>
                  <th scope="col">Trạng thái đơn hàng</th>
                  <th scope="col">Hành động</th>
                </tr>
              </thead>
              <tbody>
                <tr class="align-baseline">
                  <td>#UHG423</td>
                  <td>Nguyễn Chí Phương</td>
                  <td>Chờ xác nhận <a href="<?= _WEB_ROOT ?>/cap-nhat-trang-thai-don-hang" class="d-none"><i class="fa fa-edit"></i></a></td>
                  <td>
                    <p class="text-danger">Bị Hủy</p>
                  </td>
                  <td>
                    <a href="<?= _WEB_ROOT ?>/xem-them-don-hang" class="btn btn-outline-warning disabled">Xem thêm</a>
                    <a href="<?= _WEB_ROOT ?>/chi-tiet-don-hang" class="btn btn-outline-info disabled">Chi tiết</a>
                  </td>
                </tr>
              </tbody>
            </form>
          </table>
          <div class="float-end">
            <form class="me-1" method="post">
              <input class="form-control" type="search" name="searchProduct" placeholder="Nhập mã đơn hàng">
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Table End -->