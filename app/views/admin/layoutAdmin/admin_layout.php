<!DOCTYPE html>
<html lang="vn">

<head>
    <meta charset="utf-8">
    <title><?php echo (isset($pages_title) ? $pages_title : 'MeoMEo'); ?></title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="https://i.pinimg.com/736x/5f/39/e6/5f39e6d606da1c3d603bdabfccf053f3.jpg" rel="icon">
    <script src="https://cdn.ckeditor.com/ckeditor5/40.2.0/classic/ckeditor.js"></script>
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="<?= _WEB_ROOT ?>/app/views/admin/public/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="<?= _WEB_ROOT ?>/app/views/admin/public/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?= _WEB_ROOT ?>/app/views/admin/public/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?= _WEB_ROOT ?>/app/views/admin/public/css/style.css" rel="stylesheet">
</head>

<body class="anthanhcuon">
    <?php
    date_default_timezone_set('Asia/Ho_Chi_Minh'); // Set default time zone
    $this->render('./admin/blocks_admin/sidebar');
    $this->render('./admin/blocks_admin/navbar');
    $this->render($body, $sub_content);
    $this->render('./admin/blocks_admin/footer');
    ?>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?= _WEB_ROOT ?>/app/views/admin/public/lib/chart/chart.min.js"></script>
    <script src="<?= _WEB_ROOT ?>/app/views/admin/public/lib/easing/easing.min.js"></script>
    <script src="<?= _WEB_ROOT ?>/app/views/admin/public/lib/waypoints/waypoints.min.js"></script>
    <script src="<?= _WEB_ROOT ?>/app/views/admin/public/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="<?= _WEB_ROOT ?>/app/views/admin/public/lib/tempusdominus/js/moment.min.js"></script>
    <script src="<?= _WEB_ROOT ?>/app/views/admin/public/lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="<?= _WEB_ROOT ?>/app/views/admin/public/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="<?= _WEB_ROOT ?>/app/views/admin/public/js/main.js"></script>
</body>

</html>