<?php
session_start();

if(isset($_SESSION['admin'])){
  header("location:dashboard.php");
  die;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
	<title>Login</title>
	<link rel="icon" type="image/x-icon" href="assets/img/fav.png" />
	<link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
	<link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="assets/css/plugins.css" rel="stylesheet" type="text/css" />
	<link href="assets/css/dash_1.css" rel="stylesheet" type="text/css" />

</head>

<body class="form">


	<div class="form-container">
		<div class="form-form">
			<div class="form-form-wrap">
				<div class="form-container">
					<div class="form-content">

						<h1 class=""><span class="brand-name">Dashboard</span></h1>
						<?php if(isset($_SESSION['msg'])){ ?>
						<div class="alert alert-<?= $_SESSION['msg_box'] ?>">
							<?php
echo $_SESSION['msg'];
unset($_SESSION['msg']);
unset($_SESSION['msg_box']);
?>
						</div>
						<?php } ?>
						<form class="text-left" action="server/action.php" method="post">
							<div class="form">

								<div id="username-field" class="field-wrapper input">
									<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
										<path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
										<circle cx="12" cy="7" r="4"></circle>
									</svg>
									<input id="username" name="username" type="text" class="form-control" placeholder="Username" required>
								</div>

								<div id="password-field" class="field-wrapper input mb-2">
									<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-lock">
										<rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
										<path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
									</svg>
									<input id="password" name="password" type="password" class="form-control" placeholder="Password" required>
								</div>
								<div class="d-sm-flex justify-content-between">
									<div class="field-wrapper toggle-pass">

									</div>
									<div class="field-wrapper">
										<button type="submit" class="btn btn-primary" name="adminlogin_btn">Log In</button>
									</div>

								</div>

							</div>
						</form>


					</div>
				</div>
			</div>
		</div>
		<div class="form-image">
			<div class="l-image">
			</div>
		</div>
	</div>



</body>

</html>
