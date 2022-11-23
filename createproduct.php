<?php include_once 'server/adminheader.php'; ?>

            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">New Book</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Fill All Fields</li>
                        </ol>

<!--					START	BODY CONTENT-->



                <div class="container">
                  <form action="server/action.php" method="post" enctype="multipart/form-data">
                      <div class="row">
                          <div class="col-lg-6">
                              <div class="checkbox-form">
                                  <div class="row">
                                      <div class="col-md-12">
                                          <div class="checkout-form-list">
                                              <label>Book Name <span class="required">*</span></label>
                                               <input type="text" class="form-control" placeholder="" name="pname" required>
                                          </div>
                                      </div>
                    <div class="col-md-12">
                                          <div class="checkout-form-list">
                                              <label>Upload Book Image<span class="required">*</span></label>
                                              <input class="form-control" type="file" name="pimage" required>
                                          </div>
                                      </div>
                                      <div class="col-md-6">
                                          <div class="checkout-form-list">
                                              <label>Category <span class="required">*</span></label>
                                              <input class="form-control" type="text" placeholder="" name="sname" required>
                                          </div>
                                      </div>
                                      <div class="col-md-6">
                                          <div class="checkout-form-list">
                                              <label>Price <span class="required">*</span></label>
                                              <input class="form-control" type="text" placeholder="" name="price" required>
                                          </div>
                                      </div>

                                      <div class="col-md-12">
                                          <div class="checkout-form-list">
                                              <label>Location <span class="required">*</span></label>
                                              <input class="form-control" type="text" placeholder="Write Location" name="location" required>
                                          </div>
                                      </div>
                                  <div class="col-md-12">
                                          <div class="checkout-form-list">
                                              <label>Description <span class="required">*</span></label>
                                              <textarea class="form-control" rows="5" style="width: 100%" name="description" required>

                      </textarea>
                                          </div>
                                      </div>

                                  </div>
                            </div>
               <div class="order-button-payment mt-20">
                                      <button type="submit" class="btn btn-success btn-tp" name="adminupload_btn" type="submit">Upload Book</button>
                                      </div>
                          </div>
                          <div class="col-lg-6">
              <img src="assets/img/logo.jpg" class="img-fluid mx-auto">

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
