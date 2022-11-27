<?php
include_once 'server/userheader.php';
$grand_total=0;
$allitems=0;
$items=array();
?>
<!--select payment method-->
<!--CHECKOUT-->
<div class="ltn__checkout-area mb-105">
	<div class="container">
		<form action="server/action.php" method="post">
			<input type="hidden" value="<?= $current_id ?>" name="userid">
			<div class="row">
				<div class="col-lg-12" style="margin-top: 10rem;">
					<div class="ltn__checkout-inner">

						<div class="ltn__checkout-single-content mt-50">
							<h4 class="title-2">Billing Details</h4>
							<div class="ltn__checkout-single-content-info">

								<h6>Personal Information</h6>
								<div class="row">
									<div class="col-md-6">
										<div class="input-item input-item-name ltn__custom-icon">
											<input required type="text" name="firstname" value="<?= $current_firstname; ?>">
										</div>
									</div>
									<div class="col-md-6">
										<div class="input-item input-item-name ltn__custom-icon">
											<input required type="text" name="lastname" value="<?= $current_lastname; ?>">
										</div>
									</div>
									<div class="col-md-6">
										<div class="input-item input-item-email ltn__custom-icon">
											<input required type="email" name="email" value="<?= $current_email; ?>">
										</div>
									</div>
									<div class="col-md-6">
										<div class="input-item input-item-phone ltn__custom-icon">
											<input required type="text" name="phone" value="<?= $current_mobile; ?>">
										</div>
									</div>

								</div>
								<div class="row">
									<div class="col-lg-4 col-md-6">
										<h6>Country</h6>
										<div class="input-item">
											<select class="nice-select" name="country" required>
												<option>Select Country</option>
												<option>Australia</option>
												<option>Canada</option>
												<option>China</option>
												<option>Morocco</option>
												<option>Saudi Arabia</option>
												<option>United Kingdom (UK)</option>
												<option>United States (US)</option>
											</select>
										</div>
									</div>
									<div class="col-lg-12 col-md-12">
										<h6>Address</h6>
										<div class="row">
											<div class="col-md-8">
												<div class="input-item">
													<input name="street" type="text" placeholder="House number and street name" required>
												</div>
											</div>

										</div>
									</div>
									<div class="col-lg-4 col-md-6">
										<h6>Town / City</h6>
										<div class="input-item">
											<input type="text" placeholder="City" name="city" required>
										</div>
									</div>
									<div class="col-lg-4 col-md-6">
										<h6>State </h6>
										<div class="input-item">
											<input type="text" placeholder="State" name="state" required>
										</div>
									</div>
									<div class="col-lg-4 col-md-6">
										<h6>Zip</h6>
										<div class="input-item">
											<input type="text" placeholder="Zip" name="zip" required>
										</div>
									</div>
								</div>


							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="ltn__checkout-payment-method mt-50">
						<h4 class="title-2">Payment Method</h4>
						<div id="checkout_accordion_1">

							<!-- card -->

							<div class="card">
								<h5 class="collapsed ltn__card-title" data-bs-toggle="collapse" data-bs-target="#faq-item-2-3" aria-expanded="true">
									Credit/Debit <img src="img/payment-3.png" alt="#">
								</h5>
								<div id="faq-item-2-3" class="collapse show" data-bs-parent="#checkout_accordion_1">
									<div class="card-body my-2">
										<input type="text" placeholder="Card Number" name="cardno" required>
									</div>
									<div class="card-body">
										<input type="text" placeholder="(MM/YY)" name="expiry" required>
										<input type="text" placeholder="CVC" name="cardcode" required>
									</div>
								</div>
							</div>
						</div>
						<div class="ltn__payment-note mt-30 mb-30">
							<p>Your personal data will be used to process your order, support your experience throughout this website, and for other purposes described in our privacy policy.</p>
						</div>
						<button name="order_btn" class="btn theme-btn-1 btn-effect-1 text-uppercase" type="submit">Place order</button>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="shoping-cart-total mt-50">
						<h4 class="title-2">Cart Totals</h4>
						<table class="table">
							<tbody>
								<?php foreach ($selectusercart as $row) { ?>
								<tr>
									<td><?= $row['name']; ?> <strong>× <?= $row['quantity']; ?></strong></td>
									<td><?= $row['total']; ?></td>
								</tr>
								<?php $grand_total+=$row['total']; ?>
								<?php
                                                 $items[]=$row['name'];
                                                 $allitems=implode(',', $items);
                                                 ?>
								<input type="hidden" name="books" value="<?= $allitems; ?>">
								<input type="hidden" name="grand_total" value="<?= $grand_total; ?>">
								<?php } ?>

								<tr>
									<td>Shipping and Handing</td>
									<td>$15.00</td>
								</tr>
								<tr>
									<td>Vat</td>
									<td>$00.00</td>
								</tr>
								<tr>
									<td><strong>Order Total</strong></td>
									<td><strong>$<?= $grand_total +15.00; ?></strong></td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</form>
	</div>
</div>

<!--CHECKOUT-->

<?php
include_once 'server/userfooter.php';
?>
