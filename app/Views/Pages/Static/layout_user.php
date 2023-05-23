<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">

    <title>Chain App Dev - App Landing Page HTML5 Template</title>

    <link href="<?= base_url() ?>/user/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url() ?>/user/assets/css/templatemo-chain-app-dev.css">
    <link rel="stylesheet" href="<?= base_url() ?>/user/assets/css/animated.css">
    <link rel="stylesheet" href="<?= base_url() ?>/user/assets/css/owl.css">
</head>

<body>
    <div id="js-preloader" class="js-preloader">
        <div class="preloader-inner">
            <span class="dot"></span>
            <div class="dots">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>

    <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">

                        <a href="index.html" class="logo">
                            <img src="<?= base_url() ?>/logo/py.png" height="100" alt="Logo">
                        </a>

                        <ul class="nav">
                            <li>
                                <div class="gradient-button">
                                    <a href="/login">
                                        <i class="fa fa-sign-in-alt"></i> Login
                                    </a>
                                </div>
                            </li>
                        </ul>

                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <div id="services" class="services section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="pricing-item-pro">
                        <span class="price"></span>
                        <h2>Visi</h2>

                        <br>
                        <hr>
                        <br>

                        <ul style="font-size: large;">
                            <!-- <?php foreach ($visi as $v) : ?>
                                <li>
                                    <h4 style="color: black;"><?= $v['visi']; ?></h4>
                                </li>
                            <?php endforeach ?> -->

                            Menjadikan masyarakat sehat, sejahtera, dan mandiri
                        </ul>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="pricing-item-pro">
                        <span class="price"></span>
                        <h2>Misi</h2>

                        <br>
                        <hr>
                        <br>

                        <ul style="font-size: large; text-align: left;">
                            <!-- <?php foreach ($misi as $m) : ?>
                                <li>
                                    <h4 style="color: black;"><?= $m['misi']; ?></h4>
                                </li>
                            <?php endforeach ?> -->

                            <ol>1. Lebih mendekatkan lelayanan kesehatan masyarakat bagi warga sekitar </ol>
                            <ol>2. Meningkatkan kehadiran balita datang dan menimbang di posyandu </ol>
                            <ol>3. Menggalakan pemberian ASI ekslusif </ol>
                            <ol>4. Meningkatkan kesadaran ibu memeriksakan kehamilan </ol>
                            <ol>5. Pemberian PMT dan penyuluhan </ol>
                            <ol>6. Meningkatkan kerjasama masyarakat agar hidup bersih dan sehat </ol>
                            <ol>7. Meningkatkan kerjasama dan kemitraan dengan masyarakat disektor terkait </ol>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?= $this->renderSection('content_user'); ?>

    <footer id="newsletter">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h4>Posyandu Tunas Harapan</h4>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12 d-flex justify-content-center">
                    <div class="footer-widget">
                        <h4 class="d-flex justify-content-center">Contact Us</h4>
                        <p class="d-flex justify-content-center"><?= $alamat; ?></p>
                        <p class="d-flex justify-content-center"><?= $no_telpon; ?></p>
                        <p class="d-flex justify-content-center"><?= $email; ?></p>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="copyright-text">
                        <!-- <p>Copyright © RWM 2022. Design: <a href="https://templatemo.com/" target="_blank" title="css templates">TemplateMo</a> -->
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <!-- Scripts -->
    <script src="<?= base_url() ?>/user/vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url() ?>/user/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url() ?>/user/assets/js/owl-carousel.js"></script>
    <script src="<?= base_url() ?>/user/assets/js/animation.js"></script>
    <script src="<?= base_url() ?>/user/assets/js/imagesloaded.js"></script>
    <script src="<?= base_url() ?>/user/assets/js/popup.js"></script>
    <script src="<?= base_url() ?>/user/assets/js/custom.js"></script>
</body>

</html>