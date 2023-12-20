<div class="container-fluid position-relative d-flex p-0">
  <!-- Spinner Start -->
  <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
      <span class="sr-only">Loading...</span>
    </div>
  </div>
  <!-- Spinner End -->
  <!-- Content Start -->
  <div class="content">
    <!-- Sidebar Start -->
    <div class="sidebar pe-4 pb-3 anthanhcuon">
      <nav class="navbar bg-secondary navbar-dark">
        <a href="<?= _WEB_ROOT ?>/admin" class="navbar-brand mx-4 mb-3">
          <h3 class="text-primary"><img src="<?= _WEB_ROOT ?>/app/views/admin/public/img/logo.png" alt="" width="150"></h3>
        </a>
        <div class="d-flex align-items-center ms-4 mb-4">
          <div class="position-relative">
            <img class="rounded-circle" src="<?= _WEB_ROOT . '/' . $getUserAdmin['anhKhachHang'] ?>" alt="" style="width: 40px; height: 40px;">
            <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
          </div>
          <div class="ms-3">
            <h6 class="mb-1"><?= $getUserAdmin['tenKhachHang'] ?></h6>
            <span><?= $getUserAdmin['phanquyenKhachHang'] == 2 ? 'Quản trị viên' : false; ?></span>
          </div>
        </div>
        <div class="navbar-nav w-100">
          <a href="<?= _WEB_ROOT ?>/admin" class="nav-item nav-link text-white"><i class="fa fa-tachometer-alt ms-1 me-2 small"></i>Bảng điều khiển</a>
          <a href="<?= _WEB_ROOT ?>/danh-sach-nguoi-dung/trang-1" class="nav-item nav-link text-white small"><i class="fa fa-user ms-1 me-2"></i>Người dùng</a>
          <a href="<?= _WEB_ROOT ?>/danh-sach-danh-muc-san-pham/trang-1" class="nav-item nav-link text-white small"><i class="fa-solid fa-layer-group ms-1 me-2"></i>Danh mục sản phẩm</a>
          <a href="<?= _WEB_ROOT ?>/danh-sach-danh-muc-baiviet/trang-1" class="nav-item nav-link text-white small"><i class="fa-solid fa-book ms-1 me-2"></i>Danh mục bài viết</a>
          <a href="<?= _WEB_ROOT ?>/danh-sach-san-pham" class="nav-item nav-link text-white small"><i class="fa fa-shop ms-1 me-2"></i>Sản phẩm</a>
          <a href="<?= _WEB_ROOT ?>/danh-sach-don-hang" class="nav-item nav-link text-white small"><i class="fa fa-bag-shopping ms-1 me-2"></i>Đơn hàng</a>
          <a href="<?= _WEB_ROOT ?>/danh-sach-binh-luan" class="nav-item nav-link text-white small"><i class="fa fa-comments ms-1 me-2"></i>Bình luận</a>
          <a href="<?= _WEB_ROOT ?>/danh-sach-baiviet" class="nav-item nav-link text-white small"><i class="fa fa-book-open ms-1 me-2"></i>Bài viết</a>
          <a href="<?= _WEB_ROOT ?>/danh-sach-bang-ron" class="nav-item nav-link text-white small"><i class="fa fa-panorama ms-1 me-2"></i>Băng rôn</a>
          <a href="<?= _WEB_ROOT ?>/danh-sach-giam-gia" class="nav-item nav-link text-white small"><i class="fa fa-tag ms-1 me-2"></i>Mã giảm giá</a>
          <a href="<?= _WEB_ROOT ?>/danh-sach-lienhe" class="nav-item nav-link text-white small"><i class="fa fa-envelope ms-1 me-2"></i>Liên hệ</a>
        </div>
      </nav>
    </div>
    <!-- Sidebar End -->