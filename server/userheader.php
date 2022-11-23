<?php
session_start();

require_once 'server/controller.php';

$controller=new controller();

if(!isset($_SESSION['user'])){
  header('location:sign-in.php');
}

$current_user_email = $_SESSION['user'];

$data = $controller->current_user($current_user_email);

$current_id = $data['id'];
$current_firstname = $data['firstname'];
$current_secondname = $data['secondname'];
$current_email = $data['email'];
$current_location = $data['location'];
$current_mobile = $data['mobile'];

$selectproduct=$controller->select_product();

$selectusercart=$controller->select_cart($current_id);

$selectuserwishlist=$controller->select_wishlist($current_id);
?>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
      <meta charset="utf-8">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <title>Book Store</title>
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <link rel="shortcut icon" type="image/x-icon" href="assets/img/logo.jpg">
      <!-- CSS here -->

      <link rel="stylesheet" href="assets/css/bootstrap.css">

      <link rel="stylesheet" href="assets/css/font-awesome-pro.css">
      <link rel="stylesheet" href="assets/flaticon/flaticon.css">
      <link rel="stylesheet" href="assets/css/default.css">
      <link rel="stylesheet" href="assets/css/style.css">
   </head>
   <body>


        <!-- header area start -->
        <header class="d-none d-lg-block">
            <div class="header__area">
                <div class="header__top d-none d-md-block pt-25 pb-25">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-6 d-none d-xl-block">
                                <div class="header__top-info">
                                    <div class="logo">
                                        <a href="index.php"><img src="assets/img/logo.jpg" style="width: 100px;border-radius: 10px;"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-6 col-xl-6 col-lg-8 col-md-6">

                              

                            </div>
                            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                                <div class="header__action header__action-2 text-sm-end">
                                    <ul>
                                        <li>
                                            <a href="profile.php"><i class="fal fa-user-circle"></i></a>
                                        </li>
                                        <li>
                                            <a href="checkout.php">
                                                <i class="flaticon-random-button"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="rentlist.php"><i class="fal fa-book"></i>
                                                <span class="cart-count"><?= $controller->count_wishlist($current_id); ?></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="cart.php">
                                                <i class="fal fa-shopping-basket"></i>
                                                <span class="cart-count"><?= $controller->count_cart($current_id); ?></span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="header__bottom  black-bg d-none d-xl-block">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-xxl-12 col-lg-8 col-sm-6 col-4">
                                <div class="main-menu main-menu-3">
                                    <nav id="mobile-menu">
                                        <ul>
                                            <li >
                                                <a href="index.php">Home </a>

                                            </li>
											 <li >
                                                <a href="seller.php">Seller </a>

                                            </li>
                                                    <li>
                                                        <a href="server/logout.php">Logout</a>
                                                    </li>

                                       </ul>
                                    </nav>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- header area end -->
        <!-- mobile-header-area start -->
        <div class="mobile-header-area pt-20 pb-20 d-xl-none">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-6">
                        <div class="mobile-logo">
                             <a href="index.php"><img src="assets/img/logo.jpg" style="width: 70px;border-radius: 10px;"></a>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="header-bar d-xl-none text-end">
                            <button type="button" class="header-bar-btn" data-bs-toggle="modal" data-bs-target="#offCanvasModal">
                                <span></span>
                                <span></span>
                                <span></span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- mobile-header-area end -->
        <!-- cart mini area start -->
        <div class="cartmini__area">
            <div class="modal fade" id="cartMiniModal" tabindex="-1" aria-labelledby="cartMiniModal" aria-hidden="true">
                <div class="modal-dialog">
                <div class="modal-content">
                    <div class="cartmini__wrapper">
                        <div class="cartmini__top d-flex align-items-center justify-content-between">
                            <h4>Your Cart</h4>
                            <div class="cartminit__close">
                                <button type="button" data-bs-dismiss="modal" data-bs-target="#cartMiniModal" class="cartmini__close-btn"> <i class="fal fa-times"></i></button>
                            </div>
                        </div>
                        <div class="cartmini__list">
                            <ul>
                                <li class="cartmini__item p-relative d-flex align-items-start">
                                    <div class="cartmini__thumb mr-15">
                                        <a href="product-details.php">
                                            <img src="assets/img/products/product-1.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="cartmini__content">
                                        <h3 class="cartmini__title">
                                            <a href="product-details.html">Form Armchair Walnut Base</a>
                                        </h3>
                                        <span class="cartmini__price">
                                            <span class="price">1 × $70.00</span>
                                        </span>
                                    </div>
                                    <a href="#" class="cartmini__remove">
                                        <i class="fal fa-times"></i>
                                    </a>
                                </li>
                                <li class="cartmini__item p-relative d-flex align-items-start">
                                    <div class="cartmini__thumb mr-15">
                                        <a href="product-details.html">
                                            <img src="assets/img/products/product-2.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="cartmini__content">
                                        <h3 class="cartmini__title">
                                            <a href="product-details.html">Form Armchair Simon Legald</a>
                                        </h3>
                                        <span class="cartmini__price">
                                            <span class="price">1 × $95.99</span>
                                        </span>
                                    </div>
                                    <a href="#" class="cartmini__remove">
                                        <i class="fal fa-times"></i>
                                    </a>
                                </li>
                                <li class="cartmini__item p-relative d-flex align-items-start">
                                    <div class="cartmini__thumb mr-15">
                                        <a href="product-details.html">
                                            <img src="assets/img/products/product-3.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="cartmini__content">
                                        <h3 class="cartmini__title">
                                            <a href="product-details.html">Antique Chinese Armchairs</a>
                                        </h3>
                                        <span class="cartmini__price">
                                            <span class="price">1 × $120.00</span>
                                        </span>
                                    </div>
                                    <a href="#" class="cartmini__remove">
                                        <i class="fal fa-times"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="cartmini__total d-flex align-items-center justify-content-between">
                            <h5>Total</h5>
                            <span>$180.00</span>
                        </div>
                        <div class="cartmini__bottom">
                            <a href="cart.php" class="b-btn w-100 mb-20">view cart</a>
                            <a href="checkout.php" class="b-btn-2 w-100">checkout</a>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
        <!-- cart mini area end -->
        <div class="body-overlay"></div>
        <!-- cart mini area end -->

        <!-- sidebar area start -->
        <section class="offcanvas__area">
            <div class="modal fade" id="offCanvasModal" tabindex="-1" aria-labelledby="offCanvasModal" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="offcanvas__wrapper">
                            <div class="offcanvas__top d-flex align-items-center mb-60 justify-content-between">
                                <div class="logo">
                                  <a href="index.php"><img src="assets/img/logo.jpg" style="width: 100px;border-radius: 10px;"></a>
                                </div>
                                <div class="offcanvas__close">
                                    <button class="offcanvas__close-btn" data-bs-dismiss="modal" data-bs-target="#offCanvasModal">
                                        <svg viewBox="0 0 22 22">
                                            <path d="M12.41,11l5.29-5.29c0.39-0.39,0.39-1.02,0-1.41s-1.02-0.39-1.41,0L11,9.59L5.71,4.29c-0.39-0.39-1.02-0.39-1.41,0
                                            s-0.39,1.02,0,1.41L9.59,11l-5.29,5.29c-0.39,0.39-0.39,1.02,0,1.41C4.49,17.9,4.74,18,5,18s0.51-0.1,0.71-0.29L11,12.41l5.29,5.29
                                            C16.49,17.9,16.74,18,17,18s0.51-0.1,0.71-0.29c0.39-0.39,0.39-1.02,0-1.41L12.41,11z"/>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                            <div class="sidebar__search mb-25">
                                <form action="#">
                                   <input type="text" placeholder="What are you searching for?">
                                   <button type="submit"><i class="far fa-search"></i></button>
                                </form>
                             </div>
                            <div class="offcanvas__content p-relative z-index-1">
                                <div class="canvas__menu">
                                    <div class="mobile-menu fix"></div>
                                </div>
                                <div class="offcanvas__action mt-40 mb-15">
                                    <a href="sign-in.php">Sign In</a>
                                    <a href="wishlist.php" class="has-tag">
                                        <svg viewBox="0 0 22 22">
                                            <path d="M20.26,11.3c2.31-2.36,2.31-6.18-0.02-8.53C19.11,1.63,17.6,1,16,1c0,0,0,0,0,0c-1.57,0-3.05,0.61-4.18,1.71c0,0,0,0,0,0
                                            L11,3.41l-0.81-0.69c0,0,0,0,0,0C9.06,1.61,7.58,1,6,1C4.4,1,2.89,1.63,1.75,2.77c-2.33,2.35-2.33,6.17-0.02,8.53
                                            c0,0,0,0.01,0.01,0.01l0.01,0.01c0,0,0,0,0,0c0,0,0,0,0,0L11,20.94l9.25-9.62c0,0,0,0,0,0c0,0,0,0,0,0L20.26,11.3
                                            C20.26,11.31,20.26,11.3,20.26,11.3z M3.19,9.92C3.18,9.92,3.18,9.92,3.19,9.92C3.18,9.92,3.18,9.91,3.18,9.91
                                            c-1.57-1.58-1.57-4.15,0-5.73C3.93,3.42,4.93,3,6,3c1.07,0,2.07,0.42,2.83,1.18C8.84,4.19,8.85,4.2,8.86,4.21
                                            c0.01,0.01,0.01,0.02,0.03,0.03l1.46,1.25c0.07,0.06,0.14,0.09,0.22,0.13c0.01,0,0.01,0.01,0.02,0.01c0.13,0.06,0.27,0.1,0.41,0.1
                                            c0.08,0,0.16-0.03,0.25-0.05c0.03-0.01,0.07-0.01,0.1-0.02c0.07-0.03,0.13-0.07,0.2-0.11c0.03-0.02,0.07-0.03,0.1-0.06l1.46-1.24
                                            c0.01-0.01,0.02-0.02,0.03-0.03c0.01-0.01,0.03-0.01,0.04-0.02C13.93,3.42,14.93,3,16,3c0,0,0,0,0,0c1.07,0,2.07,0.42,2.83,1.18
                                            c1.56,1.58,1.56,4.15,0,5.73c0,0,0,0.01-0.01,0.01c0,0,0,0,0,0L11,18.06L3.19,9.92z"/>
                                        </svg>
                                        <span class="tag">2</span>
                                    </a>
                                    <a href="cart.php" class="has-tag">
                                        <i class="far fa-shopping-bag"></i>
                                        <span class="tag">3</span>
                                    </a>
                               </div>
                                <div class="offcanvas__social mt-15">
                                    <ul>
                                        <li>
                                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fab fa-twitter"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fab fa-instagram"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fab fa-google-plus-g"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <!-- sidebar area end -->
