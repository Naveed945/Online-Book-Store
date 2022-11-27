<?php
include_once 'server/userheader.php';

$grand_total=0;
?>
<!-- SHOPING CART AREA START -->
<div class="liton__shoping-cart-area mb-120">
	<div class="container mt-5">
		<div class="row mt-5">
			<div class="col-lg-12 " style="margin-top: 10rem;">
				<div class="shoping-cart-inner">
					<div class="shoping-cart-table table-responsive">
						<table class="table">

							<tbody>
								<?php foreach ($selectusercart as $row) { ?>
								<tr>
									<td class="cart-product-remove"><a href="server/action.php?delcart=<?= $row['id']; ?>">x</a></td>
									<td class="cart-product-image">
										<img src="server/<?= $row['image']; ?>" alt="book">
									</td>
									<td class="cart-product-info">
										<h4><?= $row['name']; ?></h4>
									</td>
									<td class="cart-product-price"><?= $row['amount']; ?></td>
									<td class="cart-product-quantity">
										<?= $row['quantity']; ?>
									</td>
									<td class="cart-product-subtotal">$<span class="amount"><?= $row['total']; ?> </span></td>
								</tr>
								<?php $grand_total+=$row['total']; ?>
								<?php } ?>
							</tbody>
						</table>
					</div>
					<div class="shoping-cart-total mt-50">
						<h4>Cart Totals</h4>
						<table class="table">
							<tbody>
								<tr>
									<td>Cart Subtotal</td>
									<td>$<?= $grand_total; ?></td>
								</tr>
								<tr>
									<td>Shipping and Handing</td>
									<td>$15.00</td>
								</tr>
								<tr>
									<td>Vat</td>
									<td>$00.00</td>
								</tr>
								<!-- <tr>
									<td><strong>Order Total</strong></td>
									<td><strong>$<?= $grand_total+15.00 ?></strong></td>
								</tr>
							</tbody>
						</table>
						<div class="btn-wrapper text-right">
							<a href="checkout.php" class="theme-btn-1 btn btn-effect-1">Proceed to checkout</a> -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- SHOPING CART AREA END -->

<?php include_once 'server/userfooter.php'; ?>
