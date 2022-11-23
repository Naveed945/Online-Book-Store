<?php include_once 'server/userheader.php'; ?>
        <main>
            <!-- page__title-start -->
            <section class="page__title p-relative d-flex align-items-center" data-background="assets/img/bg/page-title-1.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="page__title-inner text-center">
                                <h1>Sell Your Book</h1>

                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- page__title-end -->


            <!-- checkout-area start -->
            <section class="checkout-area pb-85">
                <div class="container">
                    <form action="server/action.php" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="checkbox-form">
                                    <h3>Upload Your Book</h3>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="checkout-form-list">
                                                <label>Book Name <span class="required">*</span></label>
                                                 <input type="text" placeholder="" name="pname" required>
                                            </div>
                                        </div>
										  <div class="col-md-12">
                                            <div class="checkout-form-list">
                                                <label>Upload Book Image<span class="required">*</span></label>
                                                <input type="file" name="pimage" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="checkout-form-list">
                                                <label>Category <span class="required">*</span></label>
                                                <input type="text" placeholder="" name="sname" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="checkout-form-list">
                                                <label>Price <span class="required">*</span></label>
                                                <input type="text" placeholder="" name="price" required>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="checkout-form-list">
                                                <label>Location <span class="required">*</span></label>
                                                <input type="text" placeholder="Write Location" name="location" required>
                                            </div>
                                        </div>
                                    <div class="col-md-12">
                                            <div class="checkout-form-list">
                                                <label>Description <span class="required">*</span></label>
                                                <textarea rows="5" style="width: 100%" name="description" required>

												</textarea>
                                            </div>
                                        </div>

                                    </div>
                              </div>
								 <div class="order-button-payment mt-20">
                                        <button type="submit" class="btn-tp" name="upload_btn" type="submit">Upload Product</button>
                                        </div>
                            </div>
                            <div class="col-lg-6">
								<img src="assets/img/logo.jpg" class="img-fluid mx-auto">

                           </div>
                        </div>
                    </form>
                </div>
            </section>
            <!-- checkout-area end -->

        </main>


        <!-- footer area start -->
        <footer>
            <div class="footer__area footer-bg">
              <div class="footer__bottom">
                    <div class="container">
                        <div class="row">
                            <div class="col-xxl-12">
                                <div class="footer__bottom-wrapper text-center">
                              <div class="footer__copyright">
                                        <p>Copyright ©2022 BookStore. All Rights Reserved</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer area end -->

     <!-- JS here -->
      <script src="assets/js/bootstrap-bundle.js"></script>

      <script src="assets/js/main.js"></script>
   </body>

</html>
