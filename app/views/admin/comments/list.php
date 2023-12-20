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
                  <th scope="col">Mã bình luận</th>
                  <th scope="col">Khách hàng</th>
                  <th scope="col">Sao sản phẩm</th>
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
                  <td><a href="http://meomeo.com/ho-so-nguoi-khac" class="text-info" target="_blank">Lữ Phát Huy</a></td>
                  <td class="text-center">5 <i class="fa fa-star" style="font-size: 10px;"></i></td>
                  <td class="truncate-text"><a href="http://meomeo.com/chi-tiet-san-pham" class="text-info" target="_blank">Mèo tam thể</a></td>
                  <td class="truncate-text"></td>
                  <td></td>
                  <td>Con mèo này giá hơi đắt, bạn có thể giảm không?</td>
                  <td>
                    <button type="submit" name="" onclick="return confirm('Ẩn bình luận này?')" class="btn btn-outline-danger mb-1">Ẩn</button>
                  </td>
                </tr>
                <tr class="align-baseline">
                  <td>#CMT2</td>
                  <td>Lữ Phát Huy</td>
                  <td class="text-center">5 <i class="fa fa-star" style="font-size: 10px;"></i></td>
                  <td class="truncate-text"><a href="http://meomeo.com/chi-tiet-san-pham" class="text-info" target="_blank">Mèo tam thể</a></td>
                  <td class="truncate-text"></td>
                  <td>#CMT1</td>
                  <td>Nghĩ sao vậy =))</td>
                  <td>
                    <button type="submit" name="" onclick="return confirm('Ẩn bình luận này?')" class="btn btn-outline-danger mb-1">Ẩn</button>
                  </td>
                </tr>
                <tr class="align-baseline">
                  <td>#CMT4</td>
                  <td>Lữ Phát Huy</td>
                  <td class="text-center">Không có</td>
                  <td class="truncate-text"></td>
                  <td class="truncate-text"><a href="http://meomeo.com/bai-viet-chi-tiet" class="text-info" target="_blank">Top 10 cách nuôi mèo tam thể, giúp bạn có 1 con mèo siêu dễ thương</a></td>
                  <td></td>
                  <td>Xin chào</td>
                  <td>
                    <button type="submit" name="" onclick="return confirm('Ẩn bình luận này?')" class="btn btn-outline-danger mb-1">Ẩn</button>
                  </td>
                </tr>
                <tr class="align-baseline">
                  <td>#CMT7</td>
                  <td>Lữ Phát Huy</td>
                  <td class="text-center">Không có</td>
                  <td class="truncate-text"></td>
                  <td class="truncate-text"><a href="http://meomeo.com/bai-viet-chi-tiet" class="text-info" target="_blank">Top 10 cách nuôi mèo tam thể, giúp bạn có 1 con mèo siêu dễ thương</a></td>
                  <td>#CMT4</td>
                  <td>Chào cậu</td>
                  <td>
                    <button type="submit" name="" onclick="return confirm('Ẩn bình luận này?')" class="btn btn-outline-danger mb-1">Ẩn</button>
                  </td>
                </tr>
                <tr class="align-baseline">
                  <td>#CMT9</td>
                  <td>Lữ Phát Huy</td>
                  <td class="text-center">5 <i class="fa fa-star" style="font-size: 10px;"></i></td>
                  <td><a href="http://meomeo.com/chi-tiet-san-pham" class="text-info" target="_blank">Mèo tam thể</a></td>
                  <td></td>
                  <td></td>
                  <td>Con mèo này giá hơi đắt, bạn có thể giảm không?</td>
                  <td>
                    <button type="submit" name="" onclick="return confirm('Ẩn bình luận này?')" class="btn btn-outline-danger mb-1">Ẩn</button>
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
              <input class="form-control" type="search" name="searchProduct" placeholder="Nhập mã bình luận">
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Table End -->