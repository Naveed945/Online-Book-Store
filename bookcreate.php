<?php include_once 'server/adminheader.php'; ?>
<div class="layout-px-spacing">
	<h1>Create Book</h1>
	<div class="row layout-top-spacing">


		<div class="col-md-8 mx-auto bg-white col-10  layout-spacing mt-5" style="border-radius: 5px;">

			<form class="pt-4" action="server/action.php" method="post" enctype="multipart/form-data">
				<input type="hidden" value="<?= $currentadmin_username ?>" name="sellername">
				<div class="form-row mb-4">
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

				<button type="submit" class="btn btn-primary mt-3" name="createbook_btn">Add Book</button>
			</form>

		</div>


	</div>

</div>

<?php include_once 'server/adminfooter.php'; ?>
