<?php include_once 'server/adminheader.php'; 
$bookid=$_GET['bookid'];
$selectbookbyid=$controller->select_bookbyid($bookid);
?>
<div class="layout-px-spacing">
	<h1>Edit Book</h1>
	<div class="row layout-top-spacing">
<!-- we can edit books page here-->

		<div class="col-md-8 mx-auto bg-white col-10  layout-spacing mt-5" style="border-radius: 5px;">

			<form class="pt-4" action="server/action.php" method="post" enctype="multipart/form-data">
				<input type="hidden" value="<?= $currentadmin_username ?>" name="sellername">
				<input type="hidden" value="<?= $selectbookbyid['id']; ?>" name="bookid">
				<div class="form-row mb-4">
					<div class="form-group col-md-6">
						<label for="name">Book Name</label>
						<input type="text" class="form-control" id="name" name="name" required value="<?= $selectbookbyid['name']; ?>">
					</div>
					<div class="form-group col-md-6">
						<label for="amount">Book Price</label>
						<input type="text" class="form-control" id="amount" name="amount" value="<?= $selectbookbyid['amount']; ?>" required>
					</div>
					<div class="form-group col-md-6">
						<label for="category">Book Category</label>
						<input type="text" class="form-control" id="category" name="category" value="<?= $selectbookbyid['category']; ?>" required>
					</div>
					<div class="form-group col-md-6">
						<label for="author">Book Author</label>
						<input type="text" class="form-control" name="author" id="author" value="<?= $selectbookbyid['author']; ?>" required>
					</div>
					<div class="form-group col-md-8">
						<label for="image">Book Image</label>
						<img src="server/<?= $selectbookbyid['image']; ?>" style="width: 200px;height: 200px;border-radius: 4px;">
						<input type="file" accept="image/*" class="form-control" id="image" name="image" required>
					</div>
				</div>

				<div class="form-group mb-4">
					<label for="richtext">Book Description</label>
					<textarea class="form-control" name="richtext" id="richtext" required><?= $selectbookbyid['description']; ?></textarea>
				</div>

				<button type="submit" class="btn btn-primary mt-3" name="updatebook_btn">Update Book</button>
			</form>

		</div>


	</div>

</div>

<?php include_once 'server/adminfooter.php'; ?>
