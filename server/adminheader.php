<?php
session_start();

require_once 'server/controller.php';

$controller = new controller();

if(!isset($_SESSION['admin'])){
  header('location:adminlogin.php');
}

$current_admin_username = $_SESSION['admin'];
$data = $controller->current_admin($current_admin_username);
$currentadmin_id = $data['id'];
$currentadmin_username = $data['username'];
$currentadmin_email = $data['email'];
$currentadmin_profile = $data['profile'];


$selectbooks=$controller->select_books();
$selectorders=$controller->select_orders();
$selectusers=$controller->select_users();
?>

<!DOCTYPE html>
<html lang="en">


<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
	<title>Admin Dashboard </title>
	<link rel="icon" type="image/x-icon" href="img/logo.jpg" />
	<link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
	<link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="assets/css/plugins.css" rel="stylesheet" type="text/css" />
	<link href="assets/css/dash_1.css" rel="stylesheet" type="text/css" />
	<link href="assets/css/perfect-scrollbar.css" rel="stylesheet" type="text/css">

</head>

<body>

	<!--  BEGIN NAVBAR  -->
	<div class="header-container fixed-top">
		<header class="header navbar navbar-expand-sm">

			<ul class="navbar-item theme-brand flex-row  text-center">
				<li class="nav-item theme-logo">
					<a href="dashboard.php">
						<img src="img/logo.jpg" class="navbar-logo" alt="logo">
					</a>
				</li>
				<li class="nav-item theme-text">
					<a href="dashboard.php" class="nav-link">Admin </a>
				</li>
			</ul>


			<ul class="navbar-item flex-row ml-md-auto">




				<li class="nav-item dropdown user-profile-dropdown">
					<a href="javascript:void(0);" class="nav-link dropdown-toggle user" id="userProfileDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
						<img src="img/profile.jpeg" alt="avatar">
					</a>
					<div class="dropdown-menu position-absolute" aria-labelledby="userProfileDropdown">
						<div class="">
							<div class="dropdown-item">
								<a class="" href="profile.php"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
										<path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
										<circle cx="12" cy="7" r="4"></circle>
									</svg> Profile</a>
							</div>
							<div class="dropdown-item">
								<a class="" href="server/adminlogout.php"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out">
										<path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
										<polyline points="16 17 21 12 16 7"></polyline>
										<line x1="21" y1="12" x2="9" y2="12"></line>
									</svg> Sign Out</a>
							</div>
						</div>
					</div>
				</li>

			</ul>
		</header>
	</div>
	<!--  END NAVBAR  -->

	<!--  BEGIN NAVBAR  -->
	<div class="sub-header-container">
		<header class="header navbar navbar-expand-sm">
			<a href="javascript:void(0);" class="sidebarCollapse" data-placement="bottom"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu">
					<line x1="3" y1="12" x2="21" y2="12"></line>
					<line x1="3" y1="6" x2="21" y2="6"></line>
					<line x1="3" y1="18" x2="21" y2="18"></line>
				</svg></a>

			<ul class="navbar-nav flex-row">
				<li>
					<div class="page-header">

						<nav class="breadcrumb-one" aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="javascript:void(0);">Dashboard</a></li>
							</ol>
						</nav>

					</div>
				</li>
			</ul>
		</header>
	</div>
	<!--  END NAVBAR  -->

	<!--  BEGIN MAIN CONTAINER  -->
	<div class="main-container" id="container">

		<div class="overlay"></div>
		<div class="search-overlay"></div>

		<!--  BEGIN SIDEBAR  -->
		<div class="sidebar-wrapper sidebar-theme">

			<nav id="sidebar">
				<div class="shadow-bottom"></div>
				<ul class="list-unstyled menu-categories" id="accordionExample">
					<li class="menu">
						<a href="dashboard.php" data-active="true" aria-expanded="true" class="dropdown-toggle">
							<div class="">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home">
									<path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
									<polyline points="9 22 9 12 15 12 15 22"></polyline>
								</svg>
								<span>Dashboard</span>
							</div>
						</a>

					</li>


					<li class="menu">
						<a href="books.php" aria-expanded="false" class="dropdown-toggle">
							<div class="">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-box">
									<path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path>
									<polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline>
									<line x1="12" y1="22.08" x2="12" y2="12"></line>
								</svg>
								<span>Books</span>
							</div>

						</a>

					</li>


					<li class="menu">
						<a href="orders.php" aria-expanded="false" class="dropdown-toggle">
							<div class="">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-layers">
									<polygon points="12 2 2 7 12 12 22 7 12 2"></polygon>
									<polyline points="2 17 12 22 22 17"></polyline>
									<polyline points="2 12 12 17 22 12"></polyline>
								</svg>
								<span>Orders</span>
							</div>

						</a>

					</li>



					<li class="menu">
						<a href="users.php" aria-expanded="false" class="dropdown-toggle">
							<div class="">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users">
									<path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
									<circle cx="9" cy="7" r="4"></circle>
									<path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
									<path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
								</svg>
								<span>Users</span>
							</div>

						</a>

					</li>

					<li class="menu">
						<a href="server/adminlogout.php" aria-expanded="false" class="dropdown-toggle">
							<div class="">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-lock">
									<rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
									<path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
								</svg>
								<span>Logout</span>
							</div>

						</a>

					</li>

				</ul>

			</nav>

		</div>
		<!--  END SIDEBAR  -->

		<!--  BEGIN CONTENT AREA  -->
		<div id="content" class="main-content">
