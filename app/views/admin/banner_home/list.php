<!-- Table Start -->
<div class="container-fluid pt-4 px-4">
  <div class="row g-4">
    <div class="col-sm-12 col-xl-12">
      <div class="bg-secondary rounded h-100 p-4">
        <h6 class="mb-4"><?= isset($table_name) ? $table_name : 'Bảng chưa có tên' ?></h6>
        <div class="table-responsive">
          <table class="table table-striped">
            <form action="" method="post">
              <a href="<?= _WEB_ROOT ?>/them-bang-ron" class="btn mb-3 btn-outline-light text-white">Thêm băng rôn</a>
              <thead>
                <tr>
                  <th scope="col">STT</th>
                  <th scope="col">Ảnh</th>
                  <th scope="col">Người tạo</th>
                  <th scope="col">Người sửa</th>
                  <th scope="col">Ngày tạo</th>
                  <th scope="col">Ngày sửa</th>
                  <th scope="col">Hành động</th>
                </tr>
              </thead>
              <tbody>
                <tr class="align-baseline">
                  <td>1</td>
                  <td><a href="https://thichthucung.com/wp-content/uploads/meo-my-duoi-coc-bobtail-mau-trang.jpg" target="_blank"><img src="https://thichthucung.com/wp-content/uploads/meo-my-duoi-coc-bobtail-mau-trang.jpg" width="75" class="me-2" alt=""></a></td>
                  <td>Lữ Phát Huy</td>
                  <td>Lữ Phát Huy</td>
                  <td>15 phút trước</td>
                  <td>2 phút trước</td>
                  <td>
                    <a href="<?= _WEB_ROOT ?>/chinh-sua-bang-ron" class="btn btn-outline-info mb-1">Sửa</a>
                    <button type="submit" name="" onclick="return confirm('Ẩn băng rôn này?')" class="btn btn-outline-danger mb-1">Ẩn</button>
                  </td>
                </tr>
                <tr class="align-baseline">
                  <td>2</td>
                  <td><a href="https://thichthucung.com/wp-content/uploads/meo-my-duoi-coc-bobtail-mau-trang.jpg" target="_blank"><img src="https://thichthucung.com/wp-content/uploads/meo-my-duoi-coc-bobtail-mau-trang.jpg" width="75" class="me-2" alt=""></a></td>
                  <td>Lữ Phát Huy</td>
                  <td>Lữ Phát Huy</td>
                  <td>15 phút trước</td>
                  <td>2 phút trước</td>
                  <td>
                    <a href="<?= _WEB_ROOT ?>/chinh-sua-bang-ron" class="btn btn-outline-info mb-1">Sửa</a>
                    <button type="submit" name="" onclick="return confirm('Ẩn băng rôn này?')" class="btn btn-outline-danger mb-1">Ẩn</button>
                  </td>
                </tr>
                <tr class="align-baseline">
                  <td>3</td>
                  <td><a href="https://thichthucung.com/wp-content/uploads/meo-my-duoi-coc-bobtail-mau-trang.jpg" target="_blank"><img src="https://thichthucung.com/wp-content/uploads/meo-my-duoi-coc-bobtail-mau-trang.jpg" width="75" class="me-2" alt=""></a></td>
                  <td>Lữ Phát Huy</td>
                  <td>Lữ Phát Huy</td>
                  <td>15 phút trước</td>
                  <td>2 phút trước</td>
                  <td>
                    <a href="<?= _WEB_ROOT ?>/chinh-sua-bang-ron" class="btn btn-outline-info mb-1">Sửa</a>
                    <button type="submit" name="" onclick="return confirm('Ẩn băng rôn này?')" class="btn btn-outline-danger mb-1">Ẩn</button>
                  </td>
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