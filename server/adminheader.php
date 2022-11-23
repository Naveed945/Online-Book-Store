<?php
session_start();

require_once 'server/controller.php';

$controller = new controller();

if(!isset($_SESSION['admin'])){
  header('location:login.php');
}

$current_admin_email = $_SESSION['admin'];

$data = $controller->current_admin($current_admin_email);

$currentadmin_id = $data['id'];
$currentadmin_firstname = $data['firstname'];
$currentadmin_secondname = $data['secondname'];
$currentadmin_email = $data['email'];
$currentadmin_location = $data['location'];
$currentadmin_mobile = $data['mobile'];

$selectorders=$controller->select_orders();

$selectproducts=$controller->select_products();

$selectusers=$controller->select_users();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard </title>
		<link rel="icon" href="assets/img/logo.jpg">
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="assets/css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="dashboard.php">Admin</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>

            <ul class="navbar-nav ms-auto ms-md-0 me-3  me-lg-4">
                <li class="nav-item dropdown ">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><strong><em>username </em></strong><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="adminprofile.php">Profile</a></li>

                        <li><a class="dropdown-item" href="server/adminlogout.php">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="dashboard.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                        <div class="sb-sidenav-menu-heading">Interface</div>
                            <a class="nav-link" href="orders.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-shopping-cart"></i></div>
                                Orders
                            </a>
                            <a class="nav-link" href="product.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-book"></i></div>
                                Books
                            </a>
							 <a class="nav-link" href="customers.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                                Customers
                            </a>
							 <a class="nav-link" href="adminprofile.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
                                My profile
                            </a>
							 <a class="nav-link" href="server/adminlogout.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-sign-out-alt"></i></div>
                                Logout
                            </a>
                        </div>
                    </div>

                </nav>
            </div>
