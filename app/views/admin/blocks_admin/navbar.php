<!-- Navbar Start -->
<nav class="navbar navbar-expand bg-secondary navbar-dark sticky-top px-4 py-0">
  <a href="<?= _WEB_ROOT ?>/admin" class="navbar-brand d-flex d-lg-none me-4">
    <h3 class="text-primary"><img src="<?= _WEB_ROOT ?>/app/views/admin/public/img/logo.png" alt="" width="100"></h3>
  </a>
  <a href="#" class="sidebar-toggler flex-shrink-0">
    <i class="fa fa-bars"></i>
  </a>
  <div class="navbar-nav align-items-center ms-auto">
    <form method="post">
      <div class="nav-item dropdown">
        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
          <i class="fa fa-envelope me-lg-2 position-relative">
            <div class="position-absolute end-0 top-0 text-danger small">1</div>
          </i>
          <span class="d-none d-lg-inline-flex">Liên hệ</span>
        </a>
        <?php if (!empty($a = 0)) : ?>
          <div class="dropdown-menu dropdown-menu-end bg-secondary border-info rounded-0 rounded-bottom m-0 anthanhcuon2">
            <input type="hidden" value="">
            <button type="submit" name="" class="dropdown-item">
              <div class="d-flex align-items-center">
                <div class="position-relative">
                  <img class="rounded-circle" src="<?= _WEB_ROOT ?>/app/views/admin/public/img/user.jpg" alt="" style="width: 40px; height: 40px;">
                  <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                </div>
                <div class="ms-2">
                  <h6 class="fw-normal mb-0">Liên hệ mới từ Phát Huy</h6>
                  <small>15 phút trước</small>
                </div>
              </div>
            </button>
            <hr class="dropdown-divider">
            <a href="#" class="dropdown-item text-center">Xem tất cả liên hệ</a>
          </div>
        <?php else : ?>
          <div class="dropdown-menu dropdown-menu-end bg-secondary border-info rounded-0 rounded-bottom m-0 anthanhcuon2">
            <p class="dropdown-item text-center text-danger">Không có liên hệ mới nào</p>
          </div>
        <?php endif ?>
      </div>
    </form>
    <form method="post">
      <div class="nav-item dropdown">
        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
          <i class="fa fa-comments me-lg-2 position-relative">
            <div class="position-absolute end-0 top-0 text-danger small">1</div>
          </i>
          <span class="d-none d-lg-inline-flex">Bình luận</span>
        </a>
        <?php if (!empty($a = 0)) : ?>
          <div class="dropdown-menu dropdown-menu-end bg-secondary border-info rounded-0 rounded-bottom m-0 anthanhcuon2">
            <input type="hidden" value="">
            <button type="submit" name="" class="dropdown-item">
              <div class="d-flex align-items-center">
                <div class="position-relative">
                  <img class="rounded-circle" src="<?= _WEB_ROOT ?>/app/views/admin/public/img/user.jpg" alt="" style="width: 40px; height: 40px;">
                  <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                </div>
                <div class="ms-2">
                  <h6 class="fw-normal mb-0">Bình luận mới từ Phát Huy</h6>
                  <small>15 phút trước</small>
                </div>
              </div>
            </button>
            <hr class="dropdown-divider">
            <a href="#" class="dropdown-item text-center">Xem tất cả bình luận</a>
          </div>
        <?php else : ?>
          <div class="dropdown-menu dropdown-menu-end bg-secondary border-info rounded-0 rounded-bottom m-0 anthanhcuon2">
            <p class="dropdown-item text-center text-danger">Không có bình luận mới nào</p>
          </div>
        <?php endif ?>
      </div>
    </form>
    <form method="post">
      <div class="nav-item dropdown">
        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
          <i class="fa fa-bag-shopping me-lg-2 position-relative">
            <div class="position-absolute end-0 top-0 text-danger small">1</div>
          </i>
          <span class="d-none d-lg-inline-flex">Đơn hàng</span>
        </a>
        <?php if (!empty($a = 0)) : ?>
          <div class="dropdown-menu dropdown-menu-end bg-secondary border-info rounded-0 rounded-bottom m-0 anthanhcuon2">
            <input type="hidden" value="">
            <button type="submit" name="" class="dropdown-item">
              <div class="d-flex align-items-center">
                <div class="position-relative">
                  <img class="rounded-circle" src="<?= _WEB_ROOT ?>/app/views/admin/public/img/user.jpg" alt="" style="width: 40px; height: 40px;">
                  <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                </div>
                <div class="ms-2">
                  <h6 class="fw-normal mb-0">Đơn hàng mới từ Phát Huy</h6>
                  <small>15 phút trước</small>
                </div>
              </div>
            </button>
            <hr class="dropdown-divider">
            <a href="#" class="dropdown-item text-center">Xem tất cả đơn hàng</a>
          </div>
        <?php else : ?>
          <div class="dropdown-menu dropdown-menu-end bg-secondary border-info rounded-0 rounded-bottom m-0 anthanhcuon2">
            <p class="dropdown-item text-center text-danger">Không có đơn hàng mới nào</p>
          </div>
        <?php endif ?>
      </div>
    </form>
    <div class="nav-item dropdown">
      <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
        <img class="rounded-circle me-lg-2" src="<?= _WEB_ROOT . '/' . $getUserAdmin['anhKhachHang'] ?>" alt="" style="width: 40px; height: 40px;">
        <span class="d-none d-lg-inline-flex"><?= $getUserAdmin['tenKhachHang'] ?></span>
      </a>
      <div class="dropdown-menu dropdown-menu-end bg-secondary border-info rounded-0 rounded-bottom m-0">
        <a href="<?= _WEB_ROOT ?>/trang-chu" class="dropdown-item text-white">Trang người dùng</a>
        <a href="<?= _WEB_ROOT ?>/dang-xuat-admin" class="dropdown-item text-white">Đăng xuất</a>
      </div>
    </div>
  </div>
</nav>
<!-- Navbar End -->
