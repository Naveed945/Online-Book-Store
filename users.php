<?php include_once 'server/adminheader.php'; ?>

<div class="layout-px-spacing">
	<div class="row layout-top-spacing">


		<div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
			<h1><span>Users Table</span></h1>
			<div class="widget-content widget-content-area br-6">
				<table id="default-ordering" class="table table-hover" style="width:100%">
					<thead>
						<tr>

							<th>FirstName</th>
							<th>SecondName</th>
							<th>Email</th>
							<th>Location</th>
							<th>Telephone</th>
							<th class="dt-no-sorting text-center">Action</th>
						</tr>
					</thead>
					<tbody>

						<?php foreach ($selectusers as $row) { ?>
						<tr>
							<td><?= $row['firstname']; ?></td>
							<td><?= $row['lastname']; ?></td>
							<td><?= $row['email']; ?></td>
							<td><?= $row['location']; ?></td>
							<td><?= $row['mobile']; ?></td>
							<td><a href="server/action.php?userdel=<?= $row['id']; ?>" class="btn btn-sm btn-danger"> <i class="fas fa-trash"></i>DEL</a></td>
						</tr>
						<?php } ?>

					</tbody>
					<tfoot>
						<tr>
							<th>FirstName</th>
							<th>SecondName</th>
							<th>Email</th>
							<th>Location</th>
							<th>Telephone</th>
							<th class="invisible"></th>
						</tr>
					</tfoot>
				</table>
			</div>
		</div>




	</div>

</div>

<?php include_once 'server/adminfooter.php'; ?>
