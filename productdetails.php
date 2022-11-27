<?php
include_once 'server/userheader.php';
$book_id=$_GET['bookid'];
$selectbookbyid=$controller->select_bookbyid($book_id);
?>


<!-- BREADCRUMB AREA START -->
<div class="ltn__breadcrumb-area text-left bg-overlay-white-30 bg-image" data-bs-bg="img/13.jpg">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="ltn__breadcrumb-inner">

					<div class="ltn__breadcrumb-list mt-5">
						<ul>
							<li><a href="index.php"><span class="ltn__secondary-color"><i class="fas fa-home"></i></span> Home</a></li>
							<li>Book Details</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- BREADCRUMB AREA END -->
<!-- SHOP DETAILS AREA START -->
<div class="ltn__shop-details-area pb-85">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-md-12">
				<div class="ltn__shop-details-inner mb-60">
					<div class="row">
						<div class="col-md-6">
							<div class="ltn__shop-details-img-gallery">
								<div class="ltn__shop-details-large-img">
									<div class="single-large-img">

										<img src="server/<?= $selectbookbyid['image']; ?>" alt="Image">

									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="modal-product-info shop-details-info pl-0">

								<h3><?= $selectbookbyid['name']; ?></h3>
								<div class="product-price">
									<span>$ <?= $selectbookbyid['amount']; ?></span>
								</div>
								<div class="modal-product-meta ltn__product-details-menu-1">
									<ul>
										<li>
											<strong>Categories:</strong>
											<span>
												<a><?= $selectbookbyid['category']; ?></a>

											</span>
										</li>
									</ul>
								</div>
								<div class="ltn__product-details-menu-2">
									<form action="server/action.php" method="post">
										<input type="hidden" value="<?= $current_id; ?>" name="userid">
										<input type="hidden" value="<?= $selectbookbyid['image']; ?>" name="image">
										<input type="hidden" value="<?= $selectbookbyid['name']; ?>" name="name">
										<input type="hidden" value="<?= $selectbookbyid['amount']; ?>" name="amount">

										<ul>
											<li>
												<div class="cart-plus-minus">
													<input type="text" value="01" name="qty" class="cart-plus-minus-box">
												</div>
											</li>
											<li>
												<button type="submit" name="cart_btn" class="theme-btn-1 btn btn-effect-1" title="Add to Cart">
													<i class="fas fa-shopping-cart"></i>
													<span>ADD TO CART</span>
												</button>
											</li>
										</ul>
									</form>
								</div>

								<hr>

								<hr>
								<div class="ltn__safe-checkout">
									<h5> Safe Checkout</h5>
									<img src="img/payment-2.png" alt="Payment Image">
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Shop Tab Start -->
				<div class="ltn__shop-details-tab-inner ltn__shop-details-tab-inner-2">
					<div class="ltn__shop-details-tab-menu">
						<div class="nav">
							<a class="active show" data-bs-toggle="tab" href="#liton_tab_details_1_1">Description</a>
							<a data-bs-toggle="tab" href="#liton_tab_details_1_2" class="">Reviews</a>
						</div>
					</div>
					<div class="tab-content">
						<div class="tab-pane fade active show" id="liton_tab_details_1_1">
							<div class="ltn__shop-details-tab-content-inner">
								<h4 class="title-2"><?= $selectbookbyid['name']; ?></h4>
								<?= $selectbookbyid['description']; ?>
							</div>
						</div>
						<div class="tab-pane fade" id="liton_tab_details_1_2">
							<div class="ltn__shop-details-tab-content-inner">
								<h4 class="title-2">Customer Reviews</h4>

								<hr>
								<!-- comment-area -->
								<div class="ltn__comment-area mb-30">
									<div class="ltn__comment-inner">
										<ul>
											<li>
												<div class="ltn__comment-item clearfix">
													<div class="ltn__commenter-img">
														<img src="img/profile.jpeg" alt="Image">
													</div>
													<div class="ltn__commenter-comment">
														<h6>Adam Smit</h6>

														<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus, omnis fugit corporis iste magnam ratione.</p>
														<span class="ltn__comment-reply-btn">September 3, 2020</span>
													</div>
												</div>
											</li>
											<li>
												<div class="ltn__comment-item clearfix">
													<div class="ltn__commenter-img">
														<img src="img/profile.jpeg" alt="Image">
													</div>
													<div class="ltn__commenter-comment">
														<h6>Adam Smit</h6>

														<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus, omnis fugit corporis iste magnam ratione.</p>
														<span class="ltn__comment-reply-btn">September 2, 2020</span>
													</div>
												</div>
											</li>
										</ul>
									</div>
								</div>
								<!-- comment-reply -->
								<div class="ltn__comment-reply-area ltn__form-box mb-30">
									<form action="#">
										<h4 class="title-2">Add a Review</h4>
										<div class="mb-30">
											<div class="add-a-review">
												<h6>Your Ratings:</h6>

											</div>
										</div>
										<div class="input-item input-item-textarea ltn__custom-icon">
											<textarea placeholder="Type your comments...."></textarea>
										</div>
										<div class="input-item input-item-name ltn__custom-icon">
											<input type="text" placeholder="Type your name....">
										</div>

										<div class="btn-wrapper">
											<button class="btn theme-btn-1 btn-effect-1 text-uppercase" type="submit">Submit</button>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Shop Tab End -->
			</div>
			<div class="col-lg-4">
				<aside class="sidebar ltn__shop-sidebar ltn__right-sidebar">
					<!-- Top Rated Product Widget -->
					<div class="widget ltn__top-rated-product-widget">
						<h4 class="ltn__widget-title ltn__widget-title-border">Recent Books</h4>
						<ul>
							<?php foreach ($selectrecentbooks as $row) { ?>
							<li>
								<div class="top-rated-product-item clearfix">
									<div class="top-rated-product-img">
										<a href="productdetails.php?bookid=<?= $row['id']; ?>"><img src="server/<?= $row['image']; ?>" alt="book-img"></a>
									</div>
									<div class="top-rated-product-info">

										<h6><a href="productdetails.php?bookid=<?= $row['id']; ?>"><?= $row['name']; ?></a></h6>
										<div class="product-price">
											<strong>$ <?= $row['amount']; ?></strong>
										</div>
									</div>
								</div>
							</li>
							<?php } ?>
						</ul>
					</div>
					<!-- Banner Widget -->
					<div class="widget ltn__banner-widget">
						<img src="server/<?= $selectbookbyid['image']; ?>" alt="#">
					</div>
				</aside>
			</div>
		</div>
	</div>
</div>
<!-- SHOP DETAILS AREA END -->

<?php include_once 'server/userfooter.php'; ?>
