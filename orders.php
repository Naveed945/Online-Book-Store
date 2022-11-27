<?php include_once 'server/adminheader.php'; ?>

<div class="layout-px-spacing">
	<div class="row layout-top-spacing">


		<div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
			<h1><span>Orders Table</span> </h1>
			<div class="widget-content widget-content-area br-6">
				<table id="default-ordering" class="table table-hover" style="width:100%">
					<thead>
						<tr>

							<th>Fullnames</th>
							<th>Country</th>
							<th>Street</th>
							<th>city</th>
							<th>County</th>
							<th>Zip</th>
							<th>Email</th>
							<th>Mobile</th>
							<th>Books</th>
							<th>Amount</th>
							<th>Status</th>
							<th>Verify Order</th>
							<th class="dt-no-sorting text-center">Action</th>
						</tr>
					</thead>
					<tbody>

						<?php foreach ($selectorders as $row) { ?>
						<tr>

							<td><?= $row['firstname']; ?> <?= $row['lastname']; ?></td>
							<td><?= $row['country']; ?></td>
							<td><?= $row['street']; ?></td>
							<td><?= $row['city']; ?></td>
							<td><?= $row['county']; ?></td>
							<td><?= $row['zip']; ?></td>
							<td><?= $row['email']; ?></td>
							<td><?= $row['mobile']; ?></td>
							<td><?= $row['products']; ?></td>
							<td><?= $row['grand_total']; ?></td>
							<?php if($row['status']==0){ ?>
							<td>
								<p class="alert alert-warning">Pending</p>
							</td>
							<?php }else{ ?>
							<td>
								<p class="alert alert-success">Verified</p>
							</td>
							<?php } ?>
							<td><a href="server/action.php?verify=<?= $row['id']; ?>" class="btn btn-sm btn-primary my-1">verify <i class="fas fa-edit"></i></a>

							</td>
							<td><a href="server/action.php?orderdel=<?= $row['id']; ?>" class="btn btn-sm btn-danger">del <i class="fas fa-trash"></i></a></td>
						</tr>
						<?php } ?>

					</tbody>
					<tfoot>
						<tr>
							<th>Fullnames</th>
							<th>Country</th>
							<th>Street</th>
							<th>city</th>
							<th>County</th>
							<th>Zip</th>
							<th>Email</th>
							<th>Mobile</th>
							<th>Books</th>
							<th>Amount</th>
							<th>Status</th>
							<th>Verify Order</th>
							<th class="dt-no-sorting text-center">Action</th>
							<th class="invisible"></th>
						</tr>
					</tfoot>
				</table>
			</div>
		</div>




	</div>

</div>

<?php include_once 'server/adminfooter.php'; ?>
