<?php include_once 'server/adminheader.php'; ?>

<div class="layout-px-spacing">
	<h1>Admin Profile</h1>
	<div class="row layout-top-spacing">


		<div class="col-md-4 mx-auto  col-10 layout-spacing mt-5">
			<img <?php if($currentadmin_profile==NULL){ ?> src="img/profile.jpeg" <?php }else{ ?> src="server/<?= $currentadmin_profile; ?>" <?php } ?> alt="avatar" class="img-fluid" style="border-radius: 10px;">
		</div>




		<div class="col-md-7 mx-auto bg-white col-10  layout-spacing mt-5" style="border-radius: 5px;">
			<?php if(isset($_SESSION['msg'])){ ?>
			<div class="alert alert-<?= $_SESSION['msg_box'] ?>">
				<?php
echo $_SESSION['msg'];
unset($_SESSION['msg']);
unset($_SESSION['msg_box']);
?>
			</div>
			<?php } ?>

			<form class="pt-4" action="server/action.php" method="post" enctype="multipart/form-data">
				<input type="hidden" value="<?= $currentadmin_id; ?>" name="adminid">
				<div class="form-row mb-4">
					<div class="form-group col-md-6">
						<label for="name">UserName</label>
						<input type="text" class="form-control" id="name" value="<?= $currentadmin_username; ?>" readonly>
					</div>
					<div class="form-group col-md-6">
						<label for="email">Admin Email</label>
						<input type="email" class="form-control" id="email" value="<?= $currentadmin_email; ?>" name="email">
					</div>
				</div>
				<div class="form-group mb-4">
					<label for="password">Password</label>
					<input type="password" class="form-control" id="password" placeholder="password" name="password">
				</div>
				<div class="form-group mb-4">
					<label for="image">Profile Image</label>
					<input type="hidden" value="server/<?= $currentadmin_profile; ?>" name="oldprofile">
					<input type="file" class="form-control" id="image" name="profile">
				</div>



				<button type="submit" class="btn btn-primary mt-3" name="updateadmin_btn">Update Profile</button>
			</form>

		</div>


	</div>

</div>




<?php include_once 'server/adminfooter.php'; ?>
