<?php
require_once 'classes/Product.php';
$id = $_GET['id'];
$product = new Product;
$result = $product->getById($id);
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

<body>
    <header class="header-area style-1">
        <div class="container-fluid d-flex justify-content-between align-items-center">
            <div class="header-logo">
                <a href="index.php"><img alt="image" class="img-fluid" src="assets/images/header1-logo.svg"></a>
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


    <div class="inner-page-banner">
        <div class="breadcrumb-vec-btm">
            <img class="img-fluid" src="assets/images/bg/inner-banner-btm-vec.png" alt="">
        </div>
        <div class="container">
            <div class="row justify-content-center align-items-center text-center">
                <div class="col-lg-6 align-items-center">
                    <div class="banner-content">
                        <h1>Shop Details</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Shop Details</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="banner-img d-lg-block d-none">
                        <div class="banner-img-bg">
                            <img class="img-fluid" src="assets/images/bg/inner-banner-vec.png" alt="">
                        </div>
                        <img class="img-fluid" src="assets/images/bg/inner-banner-img.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="shop-details-page pt-120 mb-120">
        <div class="container">
            <div class="row g-lg-4 gy-5 mb-120">
                <div class="col-lg-7">
                    <div class="tab-content tab-content1" id="v-pills-tabContent">
                        <div class="tab-pane fade active show" id="v-pills-img1" role="tabpanel" aria-labelledby="v-pills-img1-tab">
                            <img class="img-fluid" src="assets/images/bg/shop-big-01.png" alt="">
                        </div>
                        <div class="tab-pane fade" id="v-pills-img2" role="tabpanel" aria-labelledby="v-pills-img2-tab">
                            <img class="img-fluid" src="assets/images/bg/shop-big-02.png" alt="">
                        </div>
                        <div class="tab-pane fade" id="v-pills-img3" role="tabpanel" aria-labelledby="v-pills-img3-tab">
                            <img class="img-fluid" src="assets/images/bg/shop-big-03.png" alt="">
                        </div>
                        <div class="tab-pane fade" id="v-pills-img4" role="tabpanel" aria-labelledby="v-pills-img4-tab">
                            <img class="img-fluid" src="assets/images/bg/shop-big-04.png" alt="">
                        </div>
                        <div class="tab-pane fade" id="v-pills-img5" role="tabpanel" aria-labelledby="v-pills-img5-tab">
                            <img class="img-fluid" src="assets/images/bg/shop-big-05.png" alt="">
                        </div>
                    </div>
                    <div class="nav nav1 nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <button class="nav-link active" id="v-pills-img1-tab" data-bs-toggle="pill" data-bs-target="#v-pills-img1" type="button" role="tab" aria-controls="v-pills-img1" aria-selected="true">
                            <img src="assets/images/bg/shop-sm-01.png" alt="">
                        </button>
                        <button class="nav-link" id="v-pills-img2-tab" data-bs-toggle="pill" data-bs-target="#v-pills-img2" type="button" role="tab" aria-controls="v-pills-img2" aria-selected="false">
                            <img src="assets/images/bg/shop-sm-02.png" alt="">
                        </button>
                        <button class="nav-link" id="v-pills-img3-tab" data-bs-toggle="pill" data-bs-target="#v-pills-img3" type="button" role="tab" aria-controls="v-pills-img3" aria-selected="false">
                            <img src="assets/images/bg/shop-sm-03.png" alt="">
                        </button>
                        <button class="nav-link" id="v-pills-img4-tab" data-bs-toggle="pill" data-bs-target="#v-pills-img4" type="button" role="tab" aria-controls="v-pills-img4" aria-selected="false">
                            <img src="assets/images/bg/shop-sm-04.png" alt="">
                        </button>
                        <button class="nav-link" id="v-pills-img5-tab" data-bs-toggle="pill" data-bs-target="#v-pills-img5" type="button" role="tab" aria-controls="v-pills-img5" aria-selected="false">
                            <img src="assets/images/bg/shop-sm-05.png" alt="">
                        </button>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="shop-details-content">
                        <h3><?= $result['name'] ?></h3>
                        <ul class="shopuct-review2 d-flex flex-row align-items-center mb-25">
                            <li><i class="bi bi-star-fill"></i></li>
                            <li><i class="bi bi-star-fill"></i></li>
                            <li><i class="bi bi-star-fill"></i></li>
                            <li><i class="bi bi-star-fill"></i></li>
                            <li><i class="bi bi-star-fill"></i></li>
                            <li><a href="#" class="review-no"></a></li>
                        </ul>
                        <div class="model-number">
                            <span>SKU:<?= $result['sku'] ?></span>
                        </div>
                        <div class="price-tag">
                            <h4>Rp. <?= number_format($result['sell_price']) ?></h4>
                            <del>Rp. <?= number_format($result['purchase_price']) ?></del>
                            </h4>
                        </div>
                        <p>What are you waiting for, let's buy it soon. </p>
                        <div class="shop-quantity d-flex align-items-center justify-content-start mb-20">
                            <div class="quantity d-flex align-items-center">
                                <div class="quantity-nav nice-number d-flex align-items-center">
                                    <input type="number" value="1" min="1">
                                </div>
                            </div>
                            <a href="cart.html" class="primary-btn3">Add to cart</a>
                        </div>
                        <div class="buy-now-btn">
                            <a href="cart.html">Buy Now</a>
                        </div>
                        <div class="compare-wishlist-area">
                            <ul>
                                <li><a href="#"><span><img src="assets/images/icon/compare.svg" alt=""></span> Compare</a></li>
                                <li><a href="#"><span><img src="assets/images/icon/Icon-favorites2.svg" alt=""></span> Add to wishlist</a></li>
                            </ul>
                        </div>
                        <div class="pyment-method">
                            <h6>Guaranted Safe Checkout</h6>
                            <ul>
                                <li><img src="assets/images/icon/visa2.svg" alt=""></li>
                                <li><img src="assets/images/icon/amex.svg" alt=""></li>
                                <li><img src="assets/images/icon/discover.svg" alt=""></li>
                                <li><img src="assets/images/icon/mastercard.svg" alt=""></li>
                                <li><img src="assets/images/icon/stripe.svg" alt=""></li>
                                <li><img src="assets/images/icon/paypal.svg" alt=""></li>
                                <li><img src="assets/images/icon/pay.svg" alt=""></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-120">
                <div class="col-lg-12">
                    <div class="nav nav2 nav  nav-pills" id="v-pills-tab2" role="tablist" aria-orientation="vertical">
                        <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="false">Description</button>
                        <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="true">Excessive Info</button>
                        <button class="nav-link" id="v-pills-common-tab" data-bs-toggle="pill" data-bs-target="#v-pills-common" type="button" role="tab" aria-controls="v-pills-common" aria-selected="true">Review</button>
                    </div>
                    <div class="tab-content tab-content2" id="v-pills-tabContent2">
                        <div class="tab-pane fade active show" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                            <div class="description">
                                <p class="para-2 mb-3">This is a type of food that is specifically formulated and intended for consumption by pets. It is usually sold in the form of dry kibble or wet cans, and is designed to meet the nutritional needs of a variety of different types of pets, including dogs, cats, and small animals like guinea pigs and rabbits.</p>
                                <p class="para-2 mb-3">This food may help from a variety of different ingredients, including meat, grains, vegetables, and fortified vitamins and minerals. Some pet food is formulated for specific life stages, such as puppy or senior, and may contain higher levels of certain nutrients to support the needs of pets at those stages of life.</p>
                                <p class="para-2 mb-0">At the end, also formulated for pets with special dietary needs, such as those with food allergies or sensitivities.</p>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                            <div class="addithonal-information">
                                <table class="table total-table2">
                                    <tbody>
                                        <tr>
                                            <td>Protein</td>
                                            <td>25%, to build and repair tissues, produce enzymes, and maintain healthy organs.</td>
                                        </tr>
                                        <tr>
                                            <td>Fats</td>
                                            <td>0.5%, They also help keep the skin and coat healthy.</td>
                                        </tr>
                                        <tr>
                                            <td>Carbohydrates</td>
                                            <td>10%, provide energy and help pets maintain healthy weight and keep good the digestive system.</td>
                                        </tr>
                                        <tr>
                                            <td>Minerals</td>
                                            <td>20%,Help building strong bones, maintaining healthy muscles, and regulating the body's fluid balance.</td>
                                        </tr>
                                        <tr>
                                            <td>Vitamins</td>
                                            <td>15.5%, Essential for a variety of functions in the body, including the immune system, metabolism, and growth.</td>
                                        </tr>
                                        <tr>
                                            <td>Animale</td>
                                            <td> For Dog, Cat.</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-common" role="tabpanel" aria-labelledby="v-pills-common-tab">
                            <div class="reviews-area">
                                <div class="row g-lg-4 gy-5">
                                    <div class="col-lg-8">
                                        <div class="number-of-review">
                                            <h3>Review (02) :</h3>
                                        </div>
                                        <div class="review-list-area">
                                            <ul class="review-list">
                                                <li>
                                                    <div class="single-review d-flex justify-content-between flex-md-nowrap flex-wrap">
                                                        <div class="review-image">
                                                            <img src="assets/images/bg/review-img-1.png" alt="image">
                                                        </div>
                                                        <div class="review-content">
                                                            <div class="c-header d-flex align-items-center">
                                                                <div class="review-meta">
                                                                    <h5 class="mb-0"><a href="#">Rocky Mike ,</a></h5>
                                                                    <div class="c-date">06 july,2022</div>
                                                                </div>
                                                                <div class="replay-btn">
                                                                    <a href="#"><i class="bi bi-reply"></i>Reply</a>
                                                                </div>
                                                            </div>
                                                            <ul class="product-review">
                                                                <li><i class="bi bi-star-fill"></i></li>
                                                                <li><i class="bi bi-star-fill"></i></li>
                                                                <li><i class="bi bi-star-fill"></i></li>
                                                                <li><i class="bi bi-star-fill"></i></li>
                                                                <li><i class="bi bi-star-fill"></i></li>
                                                            </ul>
                                                            <div class="c-body">
                                                                <p>I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account. </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="single-review d-flex justify-content-between flex-md-nowrap flex-wrap">
                                                        <div class="review-image">
                                                            <img src="assets/images/bg/review-img-3.png" alt="image">
                                                        </div>
                                                        <div class="review-content">
                                                            <div class="c-header d-flex align-items-center">
                                                                <div class="review-meta">
                                                                    <h5 class="mb-0"><a href="#">Rony Jhon ,</a></h5>
                                                                    <div class="c-date">07 july,2022</div>
                                                                </div>
                                                                <div class="replay-btn">
                                                                    <a href="#"><i class="bi bi-reply"></i>Reply</a>
                                                                </div>
                                                            </div>
                                                            <ul class="product-review">
                                                                <li><i class="bi bi-star-fill"></i></li>
                                                                <li><i class="bi bi-star-fill"></i></li>
                                                                <li><i class="bi bi-star-fill"></i></li>
                                                                <li><i class="bi bi-star-fill"></i></li>
                                                                <li><i class="bi bi-star-fill"></i></li>
                                                            </ul>
                                                            <div class="c-body">
                                                                <p>I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account. </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="review-form">
                                            <div class="number-of-review">
                                                <h3>Leave A Reply</h3>
                                            </div>
                                            <form>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="form-inner mb-20">
                                                            <input type="text" placeholder="Name*" required="">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="form-inner mb-20">
                                                            <input type="email" placeholder="Email*" required="">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="form-inner mb-10">
                                                            <textarea placeholder="Message..."></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="form-inner2 mb-30">
                                                            <div class="review-rate-area">
                                                                <p>Your Rating</p>
                                                                <div class="rate">
                                                                    <input type="radio" id="star5" name="rate" value="5">
                                                                    <label for="star5" title="text">5 stars</label>
                                                                    <input type="radio" id="star4" name="rate" value="4">
                                                                    <label for="star4" title="text">4 stars</label>
                                                                    <input type="radio" id="star3" name="rate" value="3">
                                                                    <label for="star3" title="text">3 stars</label>
                                                                    <input type="radio" id="star2" name="rate" value="2">
                                                                    <label for="star2" title="text">2 stars</label>
                                                                    <input type="radio" id="star1" name="rate" value="1">
                                                                    <label for="star1" title="text">1 star</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="form-inner two">
                                                            <button class="primary-btn3 btn-lg" type="submit">Post Comment</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <footer>
        <div class="container">
            <div class="row border-top">
                <div class="col-lg-6">
                    <div class="copyright-area">
                        <p>© 2023 Scooby is Proudly Powered by <a href="https://www.egenslab.com/"> Nico Ghaza Ardian.</a></p>
                    </div>
                </div>
                <div class="col-lg-6 d-flex justify-content-lg-end justify-content-center">
                    <ul class="footer-btm-menu">
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Terms & Conditions</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Help</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
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