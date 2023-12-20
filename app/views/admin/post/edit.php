<!-- Table Start -->
<div class="container-fluid pt-4 px-4">
  <div class="row g-4">
    <div class="col-sm-12 col-xl-12">
      <div class="bg-secondary rounded h-100 p-4">
        <h6 class="mb-4"><?= isset($table_name) ? $table_name : 'Bảng chưa có tên' ?></h6>
        <form action="" method="post">
          <div class="mb-3">
            <label for="floatingInput" class="form-label">Tiêu đề bài viết <span class="text-danger">*</span></label>
            <input type="text" class="form-control" id="floatingInput" value="">
          </div>
          <div class="mb-2">
            <a href="https://thichthucung.com/wp-content/uploads/meo-my-duoi-coc-bobtail-mau-trang.jpg" target="_blank"><img src="https://thichthucung.com/wp-content/uploads/meo-my-duoi-coc-bobtail-mau-trang.jpg" width="100" alt=""></a>
          </div>
          <div class="mb-3">
            <label for="floatingInput" class="form-label">Ảnh bài viết <span class="text-danger">*</span></label>
            <input class="form-control bg-dark" type="file" id="floatingInput">
          </div>
          <div class="mb-3">
            <label for="floatingInput" class="form-label">Nội dung bài viết <span class="text-danger">*</span></label>
            <textarea name="" id="editor"><?= 'Nội dung cần thay đổi' ?></textarea>
            <script>
              ClassicEditor
                .create(document.querySelector('#editor'))
                .catch(error => {
                  console.error(error);
                });
            </script>
          </div>
          <div class="float-end mb-3">
            <a href="<?= (!empty(Session::data('keywordPost'))) ? 'tim-kiem-baiviet' : 'danh-sach-baiviet' ?>" class="btn btn-outline-info me-1">Trở lại</a>
            <button type="submit" name="addUser" class="btn btn-outline-danger">Thêm</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>