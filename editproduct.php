<?php
include_once 'server/adminheader.php';

$editid=$_GET['edit'];

$selectproductbyid=$controller->select_productbyid($editid)
?>

            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Edit Book</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>

<!--					START	BODY CONTENT-->



                <div class="container">
                    <form action="server/action.php" method="post" enctype="multipart/form-data">
                      <input type="hidden" name="productid" value="<?= $editid; ?>">
                        <div class="row">
                            <div class="col-lg-6">

							     <div class="card shadow-lg border-0 rounded-lg">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Book Details</h3></div>
                                    <div class="card-body">
                                            <div class="form-floating mb-3">
                                                <input class="form-control " id="name" name="productname" type="text" value="<?= $selectproductbyid['productname']; ?>" />
                                                <label for="name">Product Name</label>
                                            </div>
											<div class="form-floating mb-3 ">
                                                <input class="form-control mt-2" id="image" type="file" name="newimage"  />
                                                <label for="image">Product Image</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="cat" name="sellername" type="text" value="<?= $selectproductbyid['sellername']; ?>" />
                                                <label for="cat">Category</label>
                                            </div>
											 <div class="form-floating mb-3">
                                                <input class="form-control" id="amount" name="price" type="number" value="<?= $selectproductbyid['price']; ?>" />
                                                <label for="amount">Amount</label>
                                            </div>
											 <div class="form-floating mb-3">
												 <textarea class="form-control" rows="12" style="width: 100%" name="description"><?= $selectproductbyid['description']; ?></textarea>
                                                <label for="amount">Description</label>
                                            </div>

                                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">

                                                <button type="submit" class="btn btn-primary" name="editproduct_btn">Save Changes</button>
                                            </div>
                                    </div>

                                </div>


                            </div>
                            <div class="col-lg-6">
								<img src="server/<?= $selectproductbyid['productimage']; ?>" class="img-fluid mx-auto">

                           </div>
                        </div>
                    </form>
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
