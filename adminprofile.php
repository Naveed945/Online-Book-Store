<?php include_once 'server/adminheader.php'; ?>

            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Admin Profile</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>

<!--					START	BODY CONTENT-->



				 <div class="container">
                        <div class="row">
							 <div class="col-lg-6">
								<img src="assets/img/p.webp" class="img-fluid mx-auto">

                           </div>
                            <div class="col-lg-6">

							     <div class="card shadow-lg border-0 rounded-lg ">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Personal Details</h3></div>
                                    <div class="card-body">




                                        <form action="server/action.php" method="post">
                                          <input type="hidden" name="adminid" value="<?= $currentadmin_id; ?>">
                                            <div class="form-floating mb-3">
                                                <input class="form-control " id="name" name="firstname" type="text" value="<?= $currentadmin_firstname; ?>" />
                                                <label for="name">First Name</label>
                                            </div>
											 <div class="form-floating mb-3">
                                                <input class="form-control " id="sname" name="secondname" type="text" value="<?= $currentadmin_secondname; ?>" />
                                                <label for="sname">Second Name</label>
                                            </div>

                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="email" name="email" type="text" value="<?= $currentadmin_email; ?>" />
                                                <label for="email">Email</label>
                                            </div>
											 <div class="form-floating mb-3">
                                               <input class="form-control" id="location" name="location" type="text" value="<?= $currentadmin_location; ?>" />
                                                <label for="location">Location</label>
                                            </div>
											 <div class="form-floating mb-3">
												 <input class="form-control" id="tel" name="mobile" type="text" value="<?= $currentadmin_mobile; ?>" />
                                                <label for="tel">Telephone</label>
                                            </div>
                                            <div class="form-floating mb-3">
												 <input class="form-control" id="pas" type="password"  name="password"/>
                                                <label for="pas">Password</label>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">

                                                <button type="submit" class="btn btn-primary" name="updateadmin_btn">Save Changes</button>
                                            </div>
                                        </form>
                                    </div>

                                </div>


                            </div>

                        </div>
                </div>








		<!--					END	BODY CONTENT-->



					</div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; BookStore 2022</div>

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
