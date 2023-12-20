<!-- Table Start -->
<div class="container-fluid pt-4 px-4">
  <div class="row g-4">
    <div class="col-sm-12 col-xl-12">
      <div class="bg-secondary rounded h-100 p-4">
        <h6 class="mb-4"><?= isset($table_name) ? $table_name : 'Bảng chưa có tên' ?></h6>
        <div class="table-responsive">
          <table class="table table-striped">
            <a href="<?= (!empty(Session::data('keywordComment'))) ? 'binh-luan-tim-kiem' : 'danh-sach-binh-luan' ?>" class="btn btn-outline-light text-white mb-3">Trở lại</a>
            <form action="" method="post">
              <thead>
                <tr>
                  <th scope="col">Mã bình luận</th>
                  <th scope="col">Khách hàng</th>
                  <th scope="col">Sản phẩm</th>
                  <th scope="col">Bài viết</th>
                  <th scope="col">Trả lời</th>
                  <th scope="col">Nội dung</th>
                  <th scope="col">Hành động</th>
                </tr>
              </thead>
              <tbody>
                <tr class="align-baseline">
                  <td>#CMT1</td>
                  <td>Lữ Phát Huy</td>
                  <td class="truncate-text"><a href="http://meomeo.com/chi-tiet-san-pham" class="text-info" target="_blank">Mèo tam thể</a></td>
                  <td class="truncate-text"></td>
                  <td></td>
                  <td>Con mèo này giá hơi đắt, bạn có thể giảm không?</td>
                  <td>
                    <button type="submit" name="" onclick="return confirm('Ẩn bình luận này?')" class="btn btn-outline-danger mb-1">Ẩn</button>
                  </td>
                </tr>
              </tbody>
            </form>
          </table>
          <div class="float-end">
            <form class="me-1" method="post">
              <input class="form-control" type="search" name="searchProduct" placeholder="Nhập mã bình luận">
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Table End -->