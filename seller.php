<?php include_once 'server/userheader.php'; ?>


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
										<a class="active show" data-bs-toggle="tab" href="#liton_tab_1_1">Upload Book <i class="fas fa-home"></i></a>
										<a data-bs-toggle="tab" href="#liton_tab_1_2"> My Books <i class="fas fa-file-alt"></i></a>

										<a data-bs-toggle="tab" href="#liton_tab_1_5">Incoming Orders From My Books <i class="fas fa-user"></i></a>

									</div>
								</div>
							</div>
							<div class="col-lg-8">
								<div class="tab-content">
									<div class="tab-pane fade active show" id="liton_tab_1_1">
										<form class="pt-4" action="server/action.php" method="post" enctype="multipart/form-data">
											<input type="hidden" value="<?= $current_email ?>" name="sellername">
											<div class=" row form-row mb-4">
												<div class="form-group col-md-6">
													<label for="name">Book Name</label>
													<input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
												</div>
												<div class="form-group col-md-6">
													<label for="amount">Book Price</label>
													<input type="text" class="form-control" id="amount" name="amount" placeholder="Price" required>
												</div>
												<div class="form-group col-md-6">
													<label for="category">Book Category</label>
													<input type="text" class="form-control" id="category" name="category" placeholder="Category" required>
												</div>
												<div class="form-group col-md-6">
													<label for="author">Book Author</label>
													<input type="text" class="form-control" name="author" id="author" placeholder="author" required>
												</div>
												<div class="form-group col-md-8">
													<label for="image">Book Image</label>
													<input type="file" accept="image/*" class="form-control" id="image" name="image" required>
												</div>
											</div>

											<div class="form-group mb-4">
												<label for="richtext">Book Description</label>
												<textarea class="form-control" name="richtext" id="richtext" required></textarea>
											</div>

											<button type="submit" class="btn btn-primary mt-3" name="createbookuser_btn">Add Book</button>
										</form>

									</div>
									<div class="tab-pane fade" id="liton_tab_1_2">
										<div class="ltn__myaccount-tab-content-inner">
											<div class="table-responsive">
												<table id="default-ordering" class="table table-hover" style="width:100%">
													<thead>
														<tr>

															<th>Image</th>
															<th>Name</th>
															<th>Price ($)</th>
															<th>Category</th>
															<th>Published</th>
														</tr>
													</thead>
													<tbody>

														<?php foreach ($selectbooks as $row) { ?>
														<tr>

															<td><img src="server/<?= $row['image']; ?>" style="width: 100px;height: 100px;border-radius: 4px;"></td>
															<td><?= $row['name']; ?></td>
															<td><?= $row['amount']; ?></td>
															<td><?= $row['category']; ?></td>
															<td><?= $row['published']; ?></td>

														</tr>
														<?php } ?>

													</tbody>
													<tfoot>
														<tr>
															<th>Image</th>
															<th>Name</th>
															<th>Price ($)</th>
															<th>Category</th>
															<th>Published</th>
															<th class="invisible"></th>
														</tr>
													</tfoot>
												</table>

											</div>
										</div>
									</div>
									<div class="tab-pane fade" id="liton_tab_1_5">
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
														<?php foreach ($selectorders as $row) { ?>
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
