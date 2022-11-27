<?php
session_start();
<!--index page has been updated-->
require_once 'server/controller.php';

$controller=new controller();

if(!isset($_SESSION['user'])){
  header('location:login.php');
}

$current_user_email = $_SESSION['user'];

$data = $controller->current_user($current_user_email);

$current_id = $data['id'];
$current_firstname = $data['firstname'];
$current_lastname = $data['lastname'];
$current_email = $data['email'];
$current_location = $data['location'];
$current_mobile = $data['mobile'];


$selectbooks=$controller->select_books();
$selectrecentbooks=$controller->select_recentbooks();
$selectusercart=$controller->select_cart($current_id);
//$selectordersbyid=$controller->select_ordersbyid($current_id);
$selectorders=$controller->select_orders();
$selectbooks=$controller->select_books();

?>

<!doctype html>
<html class="no-js" lang="zxx">

<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Book Sell</title>
	<meta name="robots" content="noindex, follow" />
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="shortcut icon" href="img/logo.jpg" type="image/x-icon" />
	<link rel="stylesheet" href="css/font-icons.css">
	<link rel="stylesheet" href="css/plugins.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/responsive.css">
</head>

<body>

	<div class="body-wrapper">

		<!-- HEADER AREA START (header-5) -->
		<header class="ltn__header-area ltn__header-5 ltn__header-logo-and-mobile-menu-in-mobile--- ltn__header-logo-and-mobile-menu--- ltn__header-transparent gradient-color-4---">

			<!-- ltn__header-middle-area start -->
			<div class="ltn__header-middle-area ltn__logo-right-menu-option ltn__header-row-bg-white ltn__header-padding ltn__header-sticky ltn__sticky-bg-white">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="site-logo-wrap">
								<div class="site-logo">
									<a href="index.php"><img src="img/logo.jpg" alt="Logo" style="width: 100px;"></a>
								</div>

							</div>
						</div>
						<div class="col header-menu-column menu-color-white---">
							<div class="header-menu d-none d-xl-block">
								<nav>
									<div class="ltn__main-menu">
										<ul>
											<li><a href="index.php">Home</a></li>
											<li><a href="seller.php">Seller</a></li>
											<li><a href="server/logout.php">Logout</a></li>

										</ul>
									</div>
								</nav>
							</div>
						</div>
						<div class="col--- ltn__header-options ltn__header-options-2 mb-sm-20">
							<!-- header-search-1 -->
							<div class="header-search-wrap">

								<div class="header-search-1">

									<div class="search-icon">
										<i class="icon-search for-search-show"></i>
										<i class="icon-cancel  for-search-close"></i>
									</div>

								</div>


								<div class="header-search-1-form">

									<form id="#" method="get" action="#">
										<input id="liveSearch" type="text" name="search" value="" placeholder="Search here..." />
										<button type="submit">
											<span><i class="icon-search"></i></span>
										</button>
									</form>

								</div>

							</div>
							<!-- user-menu -->
							<div class="ltn__drop-menu user-menu">
								<ul>
									<li>
										<a href="account.php"><i class="icon-user"></i></a>

									</li>
								</ul>
							</div>
							<!-- mini-cart -->
							<div class="mini-cart-icon">
								<a href="cart.php" class="">
									<i class="icon-shopping-cart"></i>
									<sup><?= $controller->count_cart($current_id); ?></sup>
								</a>
							</div>
							<!-- mini-cart -->
							<!-- Mobile Menu Button -->
							<div class="mobile-menu-toggle d-xl-none">
								<a href="#ltn__utilize-mobile-menu" class="ltn__utilize-toggle">
									<svg viewBox="0 0 800 600">
										<path d="M300,220 C300,220 520,220 540,220 C740,220 640,540 520,420 C440,340 300,200 300,200" id="top"></path>
										<path d="M300,320 L540,320" id="middle"></path>
										<path d="M300,210 C300,210 520,210 540,210 C740,210 640,530 520,410 C440,330 300,190 300,190" id="bottom" transform="translate(480, 320) scale(1, -1) translate(-480, -318) "></path>
									</svg>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- ltn__header-middle-area end -->
		</header>
		<!-- HEADER AREA END -->


		<!-- Utilize Mobile Menu Start -->
		<div id="ltn__utilize-mobile-menu" class="ltn__utilize ltn__utilize-mobile-menu">
			<div class="ltn__utilize-menu-inner ltn__scrollbar">
				<div class="ltn__utilize-menu-head">
					<div class="site-logo">
						<a href="index.php"><img src="img/logo.jpg" alt="Logo"></a>
					</div>
					<button class="ltn__utilize-close">×</button>
				</div>
				<!--
				<div class="ltn__utilize-menu-search-form">
					
					<form action="#">
						<input type="text" placeholder="Search...">
						<button><i class="fas fa-search"></i></button>
					</form>

				</div>
-->
				<div class="ltn__utilize-menu">
					<ul>
						<li><a href="index.php">Home</a></li>
						<li><a href="seller.php">Seller</a></li>
						<li><a href="server/logout.php">Logout</a></li>

					</ul>
				</div>
				<div class="ltn__utilize-buttons ltn__utilize-buttons-2">
					<ul>
						<li>
							<a href="account.php" title="My Account">
								<span class="utilize-btn-icon">
									<i class="far fa-user"></i>
								</span>
								My Account
							</a>
						</li>

						<li>
							<a href="cart.php" title="Shoping Cart">
								<span class="utilize-btn-icon">
									<i class="fas fa-shopping-cart"></i>
									<sup><?= $controller->count_cart($current_id); ?></sup>
								</span>
								Shoping Cart
							</a>
						</li>
					</ul>
				</div>
				<div class="ltn__social-media-2">

				</div>
			</div>
		</div>

		<div class="ltn__utilize-overlay"></div>

		<!-- PRODUCT AREA START (product-item-3) -->
		<div class="ltn__product-area ltn__product-gutter  no-product-ratting pt-85 pb-70">
			<div class="container mt-5">
				<div class="row mt-5">
					<div class="col-lg-12">
						<div class="section-title-area ltn__section-title-2 text-center">
							<h1 class="section-title">All Books</h1>
						</div>
					</div>
				</div>
				<div class="row">

					<div class="col-lg-11 mx-auto">
						<div id="displayresult" class="row ltn__tab-product-slider-one-active--- slick-arrow-1">
							<?php foreach ($selectbooks as $row) { ?>
							<!-- ltn__product-item -->
							<div class="col-md-4 col-sm-6 col-6">
								<div class="ltn__product-item ltn__product-item-2 text-left">
									<div class="product-img">
										<a href="productdetails.php?bookid=<?= $row['id']; ?>"><img src="server/<?= $row['image']; ?>" alt="book-img"></a>


									</div>
									<div class="product-info">
										<h1 style="font-size: 1.2rem;">Category: <strong><?= $row['category']; ?></strong></h1>
										<h2 class="product-title"><a href="productdetails.php?bookid=<?= $row['id']; ?>"><?= $row['name']; ?></a></h2>
										<div class="product-price">
											<strong>$ <?= $row['amount']; ?></strong>
										</div>
									</div>
								</div>
							</div>
							<!-- ltn__product-item -->
							<?php } ?>
						</div>
						<div class="row ltn__tab-product-slider-one-active--- slick-arrow-1" id="searchresult"></div>
					</div>



				</div>
			</div>
		</div>
		<!-- PRODUCT AREA END -->


		<!-- FOOTER AREA START -->
		<footer class="ltn__footer-area  ">
			<div class="ltn__copyright-area ltn__copyright-2 section-bg-7  plr--5">
				<div class="container-fluid ltn__border-top-2">
					<div class="row">
						<div class="col-md-6 col-12">
							<div class="ltn__copyright-design clearfix">
								<p>All Rights Reserved.BookStore </p>
							</div>
						</div>
						<div class="col-md-6 col-12 align-self-center">
							<div class="ltn__copyright-menu text-end">
								<p>&copy; Copyright <span class="current-year"></span></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<!-- FOOTER AREA END -->


	</div>
	<!-- Body main wrapper end -->

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {

			$("#liveSearch").keyup(function() {
				var input = $(this).val();
				if (input != "") {
					$.ajax({
						url: "livesearch.php",
						method: "POST",
						data: {
							input: input
						},
						success: function(data) {
							$("#searchresult").html(data);
							$("#searchresult").show();
							$("#displayresult").hide();
						}
					})
				} else {
					$("#searchresult").hide();
					$("#displayresult").show();
				}


			})

		})

	</script>

	<!-- All JS Plugins -->

	<script src="js/plugins.js"></script>
	<!-- Main JS -->
	<script src="js/main.js"></script>

</body>

</html>
