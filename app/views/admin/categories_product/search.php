<!-- Table Start -->
<div class="container-fluid pt-4 px-4">
  <div class="row g-4">
    <div class="col-sm-12 col-xl-12">
      <div class="bg-secondary rounded h-100 p-4">
        <h6 class="mb-4"><?= isset($table_name) ? $table_name : 'Bảng chưa có tên' ?></h6>
        <div class="table-responsive">
          <table class="table table-striped">
            <form action="" method="post">
              <a href="<?= _WEB_ROOT ?>/them-danh-muc-san-pham" class="btn mb-3 btn-outline-light text-white">Thêm</a>
              <?php if (isset($msg)) : ?>
                <p class="text-danger"><?= $msg ?></p>
                <hr class="m-0">
              <?php else : ?>
                <thead>
                  <tr>
                    <th scope="col">Tên danh mục</th>
                    <th scope="col">Ngày tạo</th>
                    <th scope="col">Hành động</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($getCategoriesSearch as $item) :
                    extract($item);
                  ?>
                    <tr class="align-baseline">
                      <td><?= $tenDanhMuc ?></td>
                      <td><?= formatTimeAgo(strtotime($ngaytaoDanhMuc)) ?></td>
                      <td>
                        <?php if ($xoaDanhMuc == 0) : ?>
                          <form action="" method="post">
                            <input type="hidden" name="id" value="<?= $id ?>">
                            <a href="<?= _WEB_ROOT ?>/chi-tiet-danh-muc-san-pham/trang-<?= $page ?>/danh-muc-so-<?= $id ?>" class="btn btn-outline-warning mb-1">Xem thêm</a>
                            <a href="<?= _WEB_ROOT ?>/sua-danh-muc-san-pham/trang-<?= $page ?>/danh-muc-so-<?= $id ?>" class="btn btn-outline-info mb-1">Sửa</a>
                            <button type="submit" name="delete" onclick="return confirm('Xóa danh mục này?')" class="btn btn-outline-danger mb-1">Xóa</button>
                          </form>
                        <?php else : ?>
                          <form action="" method="post">
                            <input type="hidden" name="id" value="<?= $id ?>">
                            <a href="<?= _WEB_ROOT ?>/chi-tiet-danh-muc-san-pham/trang-<?= $page ?>/danh-muc-so-<?= $id ?>" class="btn btn-outline-warning mb-1">Xem thêm</a>
                            <button type="submit" name="restore" onclick="return confirm('Khôi phục danh mục này?')" class="btn btn-outline-success mb-1">Khôi phục</button>
                            <button type="submit" name="deleted" onclick="return confirm('Xóa vĩnh viễn danh mục này?')" class="btn btn-outline-danger mb-1">Xóa vĩnh viễn</button>
                          </form>
                        <?php endif ?>
                      </td>
                    </tr>
                  <?php endforeach ?>
                </tbody>
              <?php endif ?>
            </form>
          </table>
          <div class="float-end">
            <form action="<?= _WEB_ROOT ?>/tim-kiem-danh-muc-san-pham/trang-<?= $page ?>" method="post">
              <input class="form-control" type="search" name="keywordCategories" placeholder="Nhập tên danh mục">
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Table End -->