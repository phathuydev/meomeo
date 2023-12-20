<!-- Table Start -->
<div class="container-fluid pt-4 px-4">
  <div class="row g-4">
    <div class="col-sm-12 col-xl-12">
      <div class="bg-secondary rounded h-100 p-4">
        <h6 class="mb-4"><?= isset($table_name) ? $table_name : 'Bảng chưa có tên' ?></h6>
        <div class="table-responsive">
          <table class="table table-striped">
            <a href="<?= (!empty(Session::data('keywordPost'))) ? 'binh-luan-baiviet' : 'danh-sach-baiviet' ?>" class="btn btn-outline-light text-white mb-3">Trở lại</a>
            <form action="" method="post">
              <thead>
                <tr>
                  <th scope="col">Mã bài viết</th>
                  <th scope="col">Tiêu đề</th>
                  <th scope="col">Ảnh</th>
                  <th scope="col">Hành động</th>
                </tr>
              </thead>
              <tbody>
                <tr class="align-baseline">
                  <td>#BV3622</td>
                  <td>Bài viết số 1</td>
                  <td><a href="https://thichthucung.com/wp-content/uploads/meo-my-duoi-coc-bobtail-mau-trang.jpg" target="_blank"><img src="https://thichthucung.com/wp-content/uploads/meo-my-duoi-coc-bobtail-mau-trang.jpg" width="75" class="me-2" alt=""></a></td>
                  <td>
                    <a href="<?= _WEB_ROOT ?>/baiviet-chi-tiet" class="btn btn-outline-warning mb-1">Xem thêm</a>
                    <a href="<?= _WEB_ROOT ?>/sua-baiviet" class="btn btn-outline-info mb-1">Sửa</a>
                    <button type="submit" name="" onclick="return confirm('Ẩn sản phẩm này?')" class="btn btn-outline-danger mb-1">Ẩn</button>
                  </td>
                </tr>
              </tbody>
            </form>
          </table>
          <div class="float-end">
            <form class="me-1" method="post">
              <input class="form-control" type="search" name="searchProduct" placeholder="Nhập mã bài viết">
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Table End -->