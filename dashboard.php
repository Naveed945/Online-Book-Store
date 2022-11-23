<?php include_once 'server/adminheader.php'; ?>

            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                        <div class="row">
                            <div class="col-lg-4 col-md-6">
                                <div class="card bg-primary text-white mb-2">
                                    <div class="card-body">Book Orders</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <h2>Order's</h2>
										<h3><em><?= $controller->count_orders(); ?> <i class="fas fa-shopping-cart"></i></em></h3>

                                    </div>
									<img src="assets/img/logo.jpg" class="img-fluid">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="card bg-warning text-white mb-2">
                                    <div class="card-body">Available Books</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                         <h2>All Book's</h2>
										<h3><em><?= $controller->count_products(); ?> <i class="fas fa-shopping-basket"></i></em></h3>

                                    </div>
									<img src="assets/img/book.jpg" class="img-fluid">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="card bg-success text-white mb-2">
                                    <div class="card-body">Registered Customers</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                          <h2>customer's</h2>
										<h3><em><?= $controller->count_users(); ?> <i class="fas fa-users"></i></em></h3>

                                    </div>
									<img src="assets/img/shop%20(2).png" class="img-fluid">
                                </div>
                            </div>

                        </div>





                   </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; BookStore. 2022</div>

                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="assets/js/scripts.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="assets/js/datatables-simple-demo.js"></script>
    </body>
</html>
