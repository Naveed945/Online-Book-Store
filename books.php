<?php include_once 'server/adminheader.php'; ?>
<!--Book page has been updated-->
<!--add new book to books page-->
<div class="layout-px-spacing">
	<div class="row layout-top-spacing">


		<div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
			<h1 style="display:flex; justify-content:space-around;"><span>Books Table</span> <a href="bookcreate.php"><button class="btn btn-primary btn-lg mx-2 my-2">CREATE NEW BOOK +</button></a></h1>
			<div class="widget-content widget-content-area br-6">
				<table id="default-ordering" class="table table-hover" style="width:100%">
					<thead>
						<tr>

							<th>Image</th>
							<th>Name</th>
							<th>Price ($)</th>
							<th>Category</th>
							<th>Published</th>
							<th class="dt-no-sorting text-center">Action</th>
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
							<td class="text-center"><a href="bookedit.php?bookid=<?= $row['id']; ?>"><button class="btn  btn-primary btn-sm mx-2 my-2">Edit</button></a> <a href="server/action.php?bookdel=<?= $row['id']; ?>"><button class="btn btn-danger btn-sm mx-2 my-2">del</button></a> </td>
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

</div>

<?php include_once 'server/adminfooter.php'; ?>
