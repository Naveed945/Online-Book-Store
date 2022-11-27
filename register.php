<?php
session_start();

if(isset($_SESSION['user'])){
  header('location:index.php');
}
?>

<!doctype html>
<html class="no-js" lang="zxx">

<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Register User</title>
	<meta name="robots" content="noindex, follow" />
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Place favicon.png in the root directory -->
	<link rel="shortcut icon" href="img/favicon.png" type="image/x-icon" />
	<!-- Font Icons css -->
	<link rel="stylesheet" href="css/font-icons.css">
	<!-- plugins css -->
	<link rel="stylesheet" href="css/plugins.css">
	<!-- Main Stylesheet -->
	<link rel="stylesheet" href="css/style.css">
	<!-- Responsive css -->
	<link rel="stylesheet" href="css/responsive.css">
</head>

<body>

	<div class="body-wrapper">

		<!-- LOGIN AREA START (Register) -->
		<div class="ltn__login-area pb-110">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 mt-5">
						<div class="section-title-area text-center">
							<h1 class="section-title">Register <br>Your Account</h1>
							<?php if(isset($_SESSION['msg'])){ ?>
							<div class="alert alert-<?= $_SESSION['msg_box'] ?>">
								<?php
		echo $_SESSION['msg'];
		unset($_SESSION['msg']);
		unset($_SESSION['msg_box']);
		?>
							</div>
							<?php } ?>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6 offset-lg-3">
						<div class="account-login-inner">
							<form action="server/action.php" method="post" class="ltn__form-box contact-form-box">
								<input type="text" name="firstname" placeholder="First Name" required>
								<input type="text" name="lastname" placeholder="Last Name" required>
								<input type="email" name="email" placeholder="Email*" required>
								<input type="text" placeholder="Telephone*" name="mobile" required>
								<input type="text" placeholder="Country" name="location" required>
								<input type="password" name="password" placeholder="Password*" required>
								<input type="password" placeholder="Re-enter Password" name="rpass" required>
								<div class="btn-wrapper">
									<button class="theme-btn-1 btn reverse-color btn-block" type="submit" name="reg_btn">CREATE ACCOUNT</button>
								</div>
							</form>
							<div class="by-agree text-center">

								<div class="go-to-btn mt-50">
									<a href="login.php">ALREADY HAVE AN ACCOUNT ?</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- LOGIN AREA END -->



	</div>
	<!-- Body main wrapper end -->

	<!-- All JS Plugins -->
	<script src="js/plugins.js"></script>
	<!-- Main JS -->
	<script src="js/main.js"></script>

</body>

</html>
