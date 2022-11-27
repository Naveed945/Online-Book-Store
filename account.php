<?php include_once 'server/userheader.php'; ?>
<!--account page has been updated-->
<!Edited Account to check-->
<!--ACCOUNT-->
<div class="liton__wishlist-area pb-70">
	<div class="container">
		<div class="row">
			<div class="col-lg-12" style="margin-top:14rem;">
				<!-- PRODUCT TAB AREA START -->
				<div class="ltn__product-tab-area">
					<div class="container">
						<div class="row">
							<div class="col-lg-4">
								<div class="ltn__tab-menu-list mb-50">
									<div class="nav">
										<a class="active show" data-bs-toggle="tab" href="#liton_tab_1_1"><?= $current_firstname; ?> Dashboard <i class="fas fa-home"></i></a>
										<a data-bs-toggle="tab" href="#liton_tab_1_2"> <?= $current_firstname; ?> Orders <i class="fas fa-file-alt"></i></a>

										<a data-bs-toggle="tab" href="#liton_tab_1_5">Account Details <i class="fas fa-user"></i></a>
										<a href="server/logout.php">Logout <i class="fas fa-sign-out-alt"></i></a>
									</div>
								</div>
							</div>
							<div class="col-lg-8">
								<div class="tab-content">
									<div class="tab-pane fade active show" id="liton_tab_1_1">
										<div class="ltn__myaccount-tab-content-inner">
											<p>Hello <strong><?= $current_firstname; ?> <?= $current_lastname; ?> </strong> </p>
											<p>From your account dashboard you can view your <span>recent orders</span>, manage your <span>shipping and billing addresses</span>, and <span>edit your password and account details</span>.</p>
										</div>
									</div>
									<div class="tab-pane fade" id="liton_tab_1_2">
										<div class="ltn__myaccount-tab-content-inner">
											<div class="table-responsive">
												<table class="table">
													<thead>
														<tr>
															<th>Name</th>
															<th>Orders</th>
															<th>Status</th>
															<th>Total</th>

														</tr>
													</thead>
													<tbody>
														<?php foreach ($selectordersbyid as $row) { ?>
														<tr>
															<td><?= $row['firstname']; ?></td>
															<td><?= $row['products']; ?></td>
															<?php if($row['status']==0){ ?>
															<td>
																<p class="alert alert-warning">Pending</p>
															</td>
															<?php }else{ ?>
															<td>
																<p class="alert alert-success">Verified</p>
															</td>
															<?php } ?>
															<td><?= $row['grand_total']; ?></td>


														</tr>
														<?php } ?>
													</tbody>
												</table>
											</div>
										
										
										</div>
									</div>
									<div class="tab-pane fade" id="liton_tab_1_5">
										<div class="ltn__myaccount-tab-content-inner">
											<p>The following addresses will be used on the checkout page by default.</p>
											<div class="ltn__form-box">
												<form action="#">

													<div class="row mb-50">
														<div class="col-md-6">
															<label>First name:</label>
															<input type="text" name="firstname" value="<?= $current_firstname; ?>">
														</div>
														<div class="col-md-6">
															<label>Last name:</label>
															<input type="text" name="lastname" value="<?= $current_lastname; ?>">
														</div>

														<div class="col-md-6">
															<label>Display Email:</label>
															<input type="email" name="email" value="<?= $current_email; ?>">
														</div>
														<div class="col-md-6">
															<label>Display Mobile:</label>
															<input type="email" name="mobile" value="<?= $current_mobile; ?>">
														</div>
														<div class="col-md-6">
															<label>Display Location:</label>
															<input type="email" name="location" value="<?= $current_location; ?>">
														</div>
													</div>
													<fieldset>
														<legend>Password change</legend>
														<div class="row">
															<div class="col-md-12">
																<label>New Password</label>
																<input type="password" name="ltn__name">

															</div>
														</div>
													</fieldset>
													<div class="btn-wrapper">
														<button type="submit" class="btn theme-btn-1 btn-effect-1 text-uppercase">Save Changes</button>
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
				<!-- PRODUCT TAB AREA END -->
			</div>
		</div>
	</div>
</div>
<!--ACCOUNT-->

<?php include_once 'server/userfooter.php'; ?>
