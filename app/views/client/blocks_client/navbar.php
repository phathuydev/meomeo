    <!-- Page Preloder -->
    <div id="preloder">
      <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header class="header">
      <div class="header__top">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 col-md-6">
              <div class="header__top__left">
                <ul>
                  <li><i class="fa fa-envelope"></i> huylppc05334@fpt.edu.vn</li>
                  <li>Miễn phí giao hàng từ 15/12/2023 đến 01/03/2024</li>
                </ul>
              </div>
            </div>
            <div class="col-lg-6 col-md-6">
              <div class="header__top__right">
                <div class="header__top__right__social">
                  <a href="#"><i class="fa fa-facebook"></i></a>
                  <a href="#"><i class="fa fa-youtube"></i></a>
                  <a href="#"><i class="fa fa-instagram"></i></a>
                  <a href="#"><i class="fa fa-envelope"></i></a>
                </div>
                <div class="header__top__right__auth">
                  <?php if (empty(Session::data('client_login'))) : ?>
                    <a href="#"><i class="fa fa-user"></i> Đăng nhập</a>
                  <?php else : ?>
                    <a href="<?= _WEB_ROOT ?>/ho-so">Xin Chào Lữ Phát Huy</a>
                  <?php endif ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-3">
            <div class="header__logo">
              <a href="<?= _WEB_ROOT ?>/trang-chu"><img src="./app/views/client/public/img/logo.png" alt="" class="" width="150"></a>
            </div>
          </div>
          <div class="col-lg-8">
            <nav class="header__menu">
              <ul>
                <li><a href="<?= _WEB_ROOT ?>/trang-chu">Trang chủ</a></li>
                <li><a href="<?= _WEB_ROOT ?>/cua-hang">Cửa hàng</a></li>
                <!-- <li><a href="#">Pages</a>
                  <ul class="header__menu__dropdown">
                    <li><a href="./shop-details.php">Shop Details</a></li>
                    <li><a href="./shoping-cart.php">Shoping Cart</a></li>
                    <li><a href="./checkout.php">Check Out</a></li>
                    <li><a href="./blog-details.php">Blog Details</a></li>
                  </ul>
                </li> -->
                <li><a href="<?= _WEB_ROOT ?>/danh-sach-bai-viet">Bài viết</a></li>
                <li><a href="<?= _WEB_ROOT ?>/lien-he">Liên hệ</a></li>
                <li><a href="<?= _WEB_ROOT ?>/ma-giam-gia">Mã giảm giá</a></li>
              </ul>
            </nav>
          </div>
          <div class="col-lg-1">
            <div class="header__cart">
              <ul>
                <li><a href="<?= _WEB_ROOT ?>/gio-hang"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="humberger__open">
          <i class="fa fa-bars"></i>
        </div>
      </div>
    </header>
    <!-- Header Section End -->