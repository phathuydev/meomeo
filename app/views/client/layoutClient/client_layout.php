<!DOCTYPE html>
<html lang="vn">

<head>
  <meta charset="UTF-8">
  <meta name="description" content="Ogani Template">
  <meta name="keywords" content="Ogani, unica, creative, html">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?php echo isset($pages_title) ? $pages_title : 'MeoMeo' ?></title>
  <link href="https://i.pinimg.com/736x/5f/39/e6/5f39e6d606da1c3d603bdabfccf053f3.jpg" rel="icon">
  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">
  <!-- Css Styles -->
  <link rel="stylesheet" href="<?php echo isset($profile_css) ? $profile_css : '' ?>" type="text/css">
  <link rel="stylesheet" href="./app/views/client/public/css/bootstrap.min.css" type="text/css">
  <link rel="stylesheet" href="./app/views/client/public/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="./app/views/client/public/css/elegant-icons.css" type="text/css">
  <link rel="stylesheet" href="./app/views/client/public/css/nice-select.css" type="text/css">
  <link rel="stylesheet" href="./app/views/client/public/css/jquery-ui.min.css" type="text/css">
  <link rel="stylesheet" href="./app/views/client/public/css/owl.carousel.min.css" type="text/css">
  <link rel="stylesheet" href="./app/views/client/public/css/slicknav.min.css" type="text/css">
  <link rel="stylesheet" href="./app/views/client/public/css/style.css" type="text/css">
</head>

<body class="anthanhcuon">
  <?php
  date_default_timezone_set('Asia/Ho_Chi_Minh'); // Set default time zone
  $this->render('./client/blocks_client/navbar');
  ?>
  <!-- Hero Section Begin -->
  <section class="hero <?= isset($hero_normal) ? '' : 'hero-normal' ?>">
    <div class="container">
      <div class="row">
        <div class="col-lg-3">
          <div class="hero__categories">
            <div class="hero__categories__all">
              <i class="fa fa-bars"></i>
              <span>Danh mục</span>
            </div>
            <ul>
              <li><a href="#">Mèo Sphynx</a></li>
              <li><a href="#">Mèo Abyssinian</a></li>
              <li><a href="#">Mèo Mỹ đuôi cộc</a></li>
              <li><a href="#">Mèo Mỹ lông ngắn</a></li>
              <li><a href="#">Mèo Birman</a></li>
              <li><a href="#">Mèo Bombay</a></li>
              <li><a href="#">Mèo Java</a></li>
              <li><a href="#">Mèo Kurilian đuôi cộc</a></li>
              <li><a href="#">Mèo tam thể</a></li>
              <li><a href="#">Mèo Anh lông dài</a></li>
              <li><a href="#">Mèo Ai Cập</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-9">
          <div class="hero__search">
            <div class="hero__search__form">
              <form action="#">
                <input type="text" class="text-dark" placeholder="Nhập tên sản phẩm">
                <button type="submit" class="site-btn">Tìm kiếm</button>
              </form>
            </div>
            <div class="hero__search__phone">
              <div class="hero__search__phone__icon">
                <i class="fa fa-phone"></i>
              </div>
              <div class="hero__search__phone__text">
                <h5>0945567048</h5>
                <span>Hỗ trợ 24/7</span>
              </div>
            </div>
          </div>
          <?php if (isset($hero_normal)) : ?>
            <div id="carouselExampleIndicators" class="carousel slide mt-4" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img class="d-block w-100" src="https://i.pinimg.com/originals/d4/ce/fd/d4cefd6968e26cb76101db9c6e17f255.jpg" style="height: 420px;" alt="First slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="https://www.itl.cat/pngfile/big/18-186640_cool-grumpy-cat-wallpaper-cat-meme-desktop-background.jpg" style="height: 420px;" alt="Second slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="https://tackexinh.com/wp-content/uploads/2022/03/anh-meo-bua-001.jpg" style="height: 420px;" alt="Third slide">
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
          <?php endif ?>
        </div>
      </div>
    </div>
  </section>
  <?php
  $this->render($content, $sub_content);
  $this->render('./client/blocks_client/footer');
  ?>
  <!-- Js Plugins -->
  <script src="./app/views/client/public/js/jquery-3.3.1.min.js"></script>
  <script src="./app/views/client/public/js/bootstrap.min.js"></script>
  <script src="./app/views/client/public/js/jquery.nice-select.min.js"></script>
  <script src="./app/views/client/public/js/jquery-ui.min.js"></script>
  <script src="./app/views/client/public/js/jquery.slicknav.js"></script>
  <script src="./app/views/client/public/js/mixitup.min.js"></script>
  <script src="./app/views/client/public/js/owl.carousel.min.js"></script>
  <script src="./app/views/client/public/js/main.js"></script>
</body>

</html>