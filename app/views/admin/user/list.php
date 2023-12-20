<!-- Table Start -->
<div class="container-fluid pt-4 px-4">
  <div class="row g-4">
    <div class="col-sm-12 col-xl-12">
      <div class="bg-secondary rounded h-100 p-4">
        <h6 class="mb-4"><?= isset($table_name) ? $table_name : 'Bảng chưa có tên' ?></h6>
        <div class="table-responsive">
          <table class="table table-striped">
            <a href="<?= _WEB_ROOT ?>/them-quan-tri-vien" class="btn mb-3 btn-outline-light text-white">Thêm</a>
            <thead>
              <tr>
                <th scope="col">Mã khách hàng</th>
                <th scope="col">Họ tên</th>
                <th scope="col">Vai trò</th>
                <th scope="col">Ngày tạo</th>
                <th scope="col">Trạng thái</th>
                <th scope="col">Hành động</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($getAllUser as $item) :
                extract($item);
              ?>
                <tr class="align-baseline">
                  <td>#<?= $maKhachHang ?></td>
                  <td><?= $tenKhachHang ?></td>
                  <td><?= $phanquyenKhachHang == 2 ? 'Quản trị viên' : 'Người dùng' ?></td>
                  <td><?= formatTimeAgo(strtotime($ngaytaoKhachHang)) ?></td>
                  <td><?= $khoataikhoanKhachHang == 0 ? 'Bình thường' : 'Đã khóa' ?></td>
                  <td>
                    <?php if ($xoaKhachHang == 0) : ?>
                      <form action="" method="post">
                        <input type="hidden" name="id" value="<?= $id ?>">
                        <a href="<?= _WEB_ROOT ?>/chi-tiet-nguoi-dung/trang-<?= $page ?>/nguoi-dung-<?= $id ?>.php" class="btn btn-outline-warning mb-1">Xem thêm</a>
                        <a href="<?= _WEB_ROOT ?>/sua-nguoi-dung/trang-<?= $page ?>/nguoi-dung-<?= $id ?>.php" class="btn btn-outline-info mb-1">Sửa</a>
                        <button type="submit" name="delete" onclick="return confirm('Xóa người dùng này?')" class="btn btn-outline-danger mb-1">Xóa</button>
                      </form>
                    <?php else : ?>
                      <form action="" method="post">
                        <input type="hidden" name="id" value="<?= $id ?>">
                        <a href="<?= _WEB_ROOT ?>/chi-tiet-nguoi-dung/trang-<?= $page ?>/nguoi-dung-<?= $id ?>.php" class="btn btn-outline-warning mb-1">Xem thêm</a>
                        <button type="submit" name="restore" onclick="return confirm('Khôi phục người dùng này?')" class="btn btn-outline-success mb-1">Khôi phục</button>
                        <button type="submit" name="deleted" onclick="return confirm('Xóa vĩnh viễn người dùng này?')" class="btn btn-outline-danger mb-1">Xóa vĩnh viễn</button>
                      </form>
                    <?php endif ?>
                  </td>
                </tr>
              <?php endforeach ?>
            </tbody>
          </table>
          <div class="d-flex justify-content-between align-items-center">
            <nav aria-label="Page navigation example">
              <div class="d-flex justify-content-between align-items-center">
                <ul class="product__pagination pagination pagination-sm">
                  <li class="page-item <?= $page < 3 ? 'd-none' : false; ?>"><a href="<?= _WEB_ROOT ?>/danh-sach-nguoi-dung/trang-<?= 1; ?>" tabindex="-1"><i class="fa fa-long-arrow-left"></i></a></li>
                  <?php for ($num = 1; $num <= $totalPage; $num++) { ?>
                    <li class="page-item <?= $num == $page ? 'bg-danger' : false; ?>"><a href="<?= _WEB_ROOT ?>/danh-sach-nguoi-dung/trang-<?= $num; ?>"><?= $num; ?></a>
                    </li>
                  <?php } ?>
                  <li class="page-item <?= $page > ($totalPage - 1) ? 'd-none' : false; ?>"><a href="<?= _WEB_ROOT ?>/danh-sach-nguoi-dung/trang-<?= $page + 1; ?>"><i class="fa fa-long-arrow-right"></i></a>
                  </li>
                </ul>
              </div>
            </nav>
            <div class="float-end">
              <form action="<?= _WEB_ROOT ?>/tim-kiem-nguoi-dung/trang-<?= $page ?>" method="post">
                <input class="form-control" type="search" name="searchUser" placeholder="Nhập mã người dùng">
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Table End -->