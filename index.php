<?php
require_once 'classes/Product.php';

$product = new Product;
$result = $product->getAll();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scooby - Petcare & Pet Shop HTML Template</title>
    <link rel="icon" href="assets/images/sm-logo.svg" type="image/gif" sizes="20x20">

    <link rel="stylesheet" href="assets/css/all.css">
    <link rel="stylesheet" href="assets/css/animate.css">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" href="assets/css/boxicons.min.css">

    <link rel="stylesheet" href="assets/css/bootstrap-icons.css">

    <link rel="stylesheet" href="assets/css/jquery-ui.css">
    <link rel="stylesheet" href="assets/css/aos.css">

    <link rel="stylesheet" href="assets/css/swiper-bundle.css">

    <link rel="stylesheet" href="assets/css/nice-select.css">

    <link rel="stylesheet" href="assets/css/magnific-popup.css">

    <link rel="stylesheet" href="assets/css/jquery.fancybox.min.css">

    <link rel="stylesheet" href="assets/css/odometer.css">

    <link rel="stylesheet" href="assets/css/datepicker.min.css">

    <link rel="stylesheet" href="assets/css/uiicss.css">

    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body class="home-pages-2">
    <header class="header-area style-3">
        <div class="container d-flex justify-content-between align-items-center">
            <div class="header-logo">
                <a href="index.php"><img alt="image" class="img-fluid" src="assets/images/header2-logo.svg"></a>
            </div>
            <div class="nav-right d-flex jsutify-content-end align-items-center">
                <ul>
                    <li>
                        <a href="page/auth/login.php">
                            <svg width="15" height="15" viewBox="0 0 15 15" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_1585_341)">
                                    <path d="M6.98716 0.938832C6.28609 1.04711 5.65949 1.38227 5.169 1.90563C4.62972 2.48055 4.3498 3.14571 4.31128 3.94235C4.25735 5.0561 4.80177 6.12086 5.74167 6.73703C6.20391 7.04125 6.64818 7.19594 7.18747 7.23977C8.18643 7.31711 9.03901 7.00258 9.72724 6.29875C10.2742 5.74188 10.5516 5.13344 10.6183 4.35743C10.7108 3.32102 10.3205 2.3568 9.54234 1.68133C9.03901 1.24821 8.57676 1.03164 7.93733 0.938832C7.62916 0.895004 7.26964 0.892426 6.98716 0.938832Z" />
                                    <path d="M4.65531 7.29655C3.49456 7.4203 2.68821 8.25561 2.31327 9.7303C2.06418 10.7126 1.99998 11.8933 2.15919 12.5405C2.29016 13.0587 2.71902 13.5846 3.21465 13.8373C3.43807 13.9507 3.75907 14.0435 4.02871 14.0744C4.18793 14.0951 5.40004 14.1002 7.71896 14.0951L11.1729 14.0873L11.3912 14.0255C12.2027 13.8037 12.7574 13.2572 12.9603 12.4889C13.0656 12.0893 13.0527 11.1354 12.9295 10.3826C12.6598 8.70678 11.9767 7.70131 10.8956 7.38678C10.6491 7.31459 10.2074 7.26045 10.0764 7.28623C9.95057 7.30944 9.77594 7.40225 9.38047 7.65749C8.95931 7.93077 8.90025 7.9617 8.58438 8.0803C8.21972 8.21694 7.91926 8.27624 7.56745 8.27624C7.20792 8.27624 6.93058 8.22467 6.56592 8.09577C6.2218 7.97202 6.20639 7.96428 5.66711 7.62139C5.38463 7.44092 5.17405 7.32491 5.09187 7.3017C4.94806 7.26561 4.94806 7.26561 4.65531 7.29655Z" />
                                </g>
                            </svg>
                        </a>
                    </li>
                </ul>
                <div class="sidebar-button mobile-menu-btn ">
                    <i class="bi bi-list"></i>
                </div>
            </div>
        </div>
    </header>


    <div class="hero3 mb-90">
        <div class="background-text">
            <h2 class="marquee_text">
                <img src="assets/images/icon/marque-foot.svg" alt="image">
                <span>
                    Get exciting Discount</span> Up To 50%
                <img src="assets/images/icon/marque-foot.svg" alt="image">
                <span>On Your
                    first buying</span> Up To 50%
            </h2>
        </div>
        <div class="swiper hero3-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="hero-wrapper">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-lg-6">
                                    <div class="banner-content">
                                        <h6>Limited Offer</h6>
                                        <h1>Best Food For Your Loving Dog.</h1>
                                        <div class="btn-group">
                                            <a class="primary-btn5 btn-md" href="javascript:;">Shop Now</a>
                                            <a class="primary-btn6" href="shop-details.html">View Details</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 d-flex justify-content-end">
                                    <div class="hero-img">
                                        <div class="offer-card">
                                            <img class="img-fluid" src="assets/images/bg/h3-banner-offer.png" alt="">
                                        </div>
                                        <img class="img-fluid banner-imgas" src="assets/images/bg/h3-banner-img.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="hero-wrapper">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-lg-6">
                                    <div class="banner-content">
                                        <h6>Limited Offer</h6>
                                        <h1>Best Food For Your Loving Cat.</h1>
                                        <div class="btn-group">
                                            <a class="primary-btn5 btn-md" href="javascript:;">Shop Now</a>
                                            <a class="primary-btn6" href="shop-details.html">View Details</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 d-flex justify-content-end">
                                    <div class="hero-img">
                                        <div class="offer-card">
                                            <img class="img-fluid" src="assets/images/bg/h3-banner-offer.png" alt="">
                                        </div>
                                        <img class="img-fluid banner-imgas" src="assets/images/bg/h3-banner-img-cat.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="hero-wrapper">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-lg-6">
                                    <div class="banner-content">
                                        <h6>Limited Offer</h6>
                                        <h1>Best Food For Your Loving Dog.</h1>
                                        <div class="btn-group">
                                            <a class="primary-btn5 btn-md" href="">Shop Now</a>
                                            <a class="primary-btn6" href="">View Details</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 d-flex justify-content-end">
                                    <div class="hero-img">
                                        <div class="offer-card">
                                            <img class="img-fluid" src="assets/images/bg/h3-banner-offer.png" alt="">
                                        </div>
                                        <img class="img-fluid banner-imgas" src="assets/images/bg/h3-banner-img-dog.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="right-sidebar">
            <div class="slider-pagination-area">
                <div class="h3-hero-slider-pagination"></div>
            </div>
        </div>
    </div>


    <div class="home3-categoty-area pt-120 mb-120">
        <div class="container">
            <div class="row mb-60">
                <div class="col-lg-12 d-flex align-items-center justify-content-between flex-wrap gap-3">
                    <div class="section-title3">
                        <h2><img src="assets/images/icon/h3-sec-tt-vect-left.svg" alt=""><span>Browse By
                                Categories</span><img src="assets/images/icon/h3-sec-tt-vect-right.svg" alt=""></h2>
                    </div>
                    <div class="slider-btn-wrap">
                        <div class="slider-btn prev-btn-11">
                            <i class="bi bi-arrow-left"></i>
                        </div>
                        <div class="slider-btn next-btn-11">
                            <i class="bi bi-arrow-right"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 d-flex justify-content-center">
                    <div class="swiper h3-category-slider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="category-card">
                                    <a href="javascript:;" class="category-card-inner">
                                        <div class="category-card-front">
                                            <div class="category-icon">
                                                <img src="assets/images/icon/dog.svg" alt="">
                                            </div>
                                            <div class="content">
                                                <h4>Dog Supplies</h4>
                                            </div>
                                        </div>
                                        <div class="category-card-back">
                                            <img src="assets/images/bg/h3-category-1.png" alt="">
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="category-card">
                                    <a href="javascript:;" class="category-card-inner">
                                        <div class="category-card-front">
                                            <div class="category-icon">
                                                <img src="assets/images/icon/cat.svg" alt="">
                                            </div>
                                            <div class="content">
                                                <h4>Cat Supplies</h4>
                                            </div>
                                        </div>
                                        <div class="category-card-back">
                                            <img src="assets/images/bg/h3-category-2.png" alt="">
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="category-card">
                                    <a href="javascript:;" class="category-card-inner">
                                        <div class="category-card-front">
                                            <div class="category-icon">
                                                <img src="assets/images/icon/bird.svg" alt="">
                                            </div>
                                            <div class="content">
                                                <h4>Bird Supplies</h4>
                                            </div>
                                        </div>
                                        <div class="category-card-back">
                                            <img src="assets/images/bg/h3-category-4.png" alt="">
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="category-card">
                                    <a href="javascript:;" class="category-card-inner">
                                        <div class="category-card-front">
                                            <div class="category-icon">
                                                <img src="assets/images/icon/Rabbit.svg" alt="">
                                            </div>
                                            <div class="content">
                                                <h4>Small Animal</h4>
                                            </div>
                                        </div>
                                        <div class="category-card-back">
                                            <img src="assets/images/bg/h3-category-5.png" alt="">
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="category-card">
                                    <a href="javascript:;" class="category-card-inner">
                                        <div class="category-card-front">
                                            <div class="category-icon">
                                                <img src="assets/images/icon/Acces.svg" alt="">
                                            </div>
                                            <div class="content">
                                                <h4>Accessories</h4>
                                            </div>
                                        </div>
                                        <div class="category-card-back">
                                            <img src="assets/images/bg/h3-category-6.png" alt="">
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="category-card">
                                    <a href="javascript:;" class="category-card-inner">
                                        <div class="category-card-front">
                                            <div class="category-icon">
                                                <img src="assets/images/icon/fish.svg" alt="">
                                            </div>
                                            <div class="content">
                                                <h4>Fish Supplies</h4>
                                            </div>
                                        </div>
                                        <div class="category-card-back">
                                            <img src="assets/images/bg/h3-category-3.png" alt="">
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="home3-collection-area mb-120">
        <div class="container">
            <div class="row mb-60">
                <div class="col-lg-12 d-flex align-items-center justify-content-between flex-wrap gap-3">
                    <div class="section-title3">
                        <h2><img src="assets/images/icon/h3-sec-tt-vect-left.svg" alt=""><span>Find Pet
                                Collections</span><img src="assets/images/icon/h3-sec-tt-vect-right.svg" alt=""></h2>
                    </div>
                    <div class="h3-view-btn d-md-flex d-none">
                        <a href="javascript:;">View All Product<img src="assets/images/icon/haf-button-2.svg" alt=""></a>
                    </div>
                </div>
            </div>
            <div class="row g-4 justify-content-center">
                <?php foreach ($result as $key => $row) : ?>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="collection-card">
                            <div class="offer-card">
                                <span>Offer</span>
                            </div>
                            <div class="collection-img">
                                <img class="img-gluid" src="assets/images/bg/category/h3-collection-01.png" alt="">
                                <div class="view-dt-btn">
                                    <div class="plus-icon">
                                        <i class="bi bi-plus"></i>
                                    </div>
                                    <a href="detail.php?id=<?= $row['id'] ?>">View Details</a>
                                </div>
                                <ul class="cart-icon-list">
                                    <li><a href="cart.html"><img src="assets/images/icon/Icon-cart3.svg" alt=""></a></li>
                                    <li><a href="#"><img src="assets/images/icon/Icon-favorites3.svg" alt=""></a></li>
                                </ul>
                            </div>
                            <div class="collection-content text-center">
                                <h4><a href="detail.php?id=<?= $row['id'] ?>"><?= $row['name'] ?></a></h4>
                                <div class="price">
                                    <h6>Rp. <?= number_format($row['sell_price']) ?></h6>
                                    <del>Rp. <?= number_format($row['purchase_price']) ?></del>
                                </div>
                                <div class="review">
                                    <ul>
                                        <li><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star-fill"></i></li>
                                    </ul>
                                    <span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="row d-md-none d-block pt-30">
                <div class="col-lg-12 d-flex justify-content-center">
                    <div class="h3-view-btn">
                        <a href="javascript:;">View All Product<img src="assets/images/icon/haf-button-2.svg" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="essential-items-area mb-120">
        <div class="container">
            <div class="row mb-60">
                <div class="col-lg-12 d-flex align-items-center justify-content-between flex-wrap gap-3">
                    <div class="section-title3">
                        <h2><img src="assets/images/icon/h3-sec-tt-vect-left.svg" alt=""><span>Essential
                                Items</span><img src="assets/images/icon/h3-sec-tt-vect-right.svg" alt=""></h2>
                    </div>
                    <div class="slider-btn-wrap">
                        <div class="slider-btn prev-btn-12">
                            <i class="bi bi-arrow-left"></i>
                        </div>
                        <div class="slider-btn next-btn-12">
                            <i class="bi bi-arrow-right"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="swiper essential-items-slider">
                        <div class="swiper-wrapper">
                            <?php foreach ($result as $key => $row) : ?>
                                <div class="swiper-slide">
                                    <div class="collection-card">
                                        <div class="offer-card">
                                            <span>Offer</span>
                                        </div>
                                        <div class="collection-img">
                                            <img class="img-gluid" src="assets/images/bg/category/h3-collection-01.png" alt="">
                                            <div class="view-dt-btn">
                                                <div class="plus-icon">
                                                    <i class="bi bi-plus"></i>
                                                </div>
                                                <a href="detail.php?id=<?= $row['id'] ?>">View Details</a>
                                            </div>
                                            <ul class="cart-icon-list">
                                                <li><a href="cart.html"><img src="assets/images/icon/Icon-cart3.svg" alt=""></a></li>
                                                <li><a href="#"><img src="assets/images/icon/Icon-favorites3.svg" alt=""></a></li>
                                            </ul>
                                        </div>
                                        <div class="collection-content">
                                            <h4><a href="detail.php?id=<?= $row['id'] ?>"> <?= $row['name'] ?></a></h4>
                                            <div class="price">
                                                <h6>Rp. <?= number_format($row['sell_price']) ?></h6>
                                                <del>Rp. <?= number_format($row['purchase_price']) ?></del>
                                            </div>
                                            <div class="review">
                                                <ul>
                                                    <li><i class="bi bi-star-fill"></i></li>
                                                    <li><i class="bi bi-star-fill"></i></li>
                                                    <li><i class="bi bi-star-fill"></i></li>
                                                    <li><i class="bi bi-star-fill"></i></li>
                                                    <li><i class="bi bi-star-fill"></i></li>
                                                </ul>
                                                <span></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <footer class="style2">
        <div class="container">
            <div class="row border-top align-items-center">
                <div class="col-lg-6">
                    <div class="copyright-area">
                        <p>© 2023 Scooby is Proudly Powered by <a href="#">Nico Ghaza Ardian.</a></p>
                    </div>
                </div>
                <div class="col-lg-6 d-flex justify-content-md-end justify-content-center">
                    <div class="social-area">
                        <ul>
                            <li><a href="https://www.facebook.com/"><i class="bx bxl-facebook"></i></a></li>
                            <li><a href="https://twitter.com/"><i class="bx bxl-twitter"></i></a></li>
                            <li><a href="https://www.pinterest.com/"><i class="bx bxl-pinterest-alt"></i></a></li>
                            <li><a href="https://www.instagram.com/"><i class="bx bxl-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="assets/js/jquery-ui.js"></script>
    <script src="assets/js/jquery.timepicker.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/swiper-bundle.min.js"></script>
    <script src="assets/js/jquery.nice-select.js"></script>
    <script src="assets/js/jquery.fancybox.min.js"></script>
    <script src="assets/js/morphext.min.js"></script>
    <script src="assets/js/odometer.min.js"></script>
    <script src="assets/js/jquery.marquee.min.js"></script>
    <script src="assets/js/viewport.jquery.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <script src="assets/js/SmoothScroll.js"></script>
    <script src="assets/js/jquery.nice-number.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/masonry.pkgd.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>