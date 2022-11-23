<?php include_once 'server/userheader.php'; ?>

        <main>
            <!-- page__title-start -->
            <section class="page__title p-relative d-flex align-items-center" data-background="assets/img/bg/page-title-1.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="page__title-inner text-center">
                                <h1>User Profile</h1>

                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- page__title-end -->


            <!-- checkout-area start -->
            <section class="checkout-area pb-85">
                <div class="container">
                    <form action="#">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="checkbox-form">
                                    <h3>Your Profile Details</h3>
                                    <img src="assets/img/p.webp" class="img-fluid">

								</div>
                            </div>
                            <div class="col-lg-6">
                                <div class="your-order mb-30 ">
                                    <h3>Personal Details</h3>
                                    <div class="your-order-table table-responsive">
                                        <table>
                                            <thead>
                                                <tr>
                                                    <th class="product-name">Title</th>
                                                    <th class="product-total">Description</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="cart_item">
                                                    <td class="product-name">
                                                         <strong class="product-quantity"> First Name</strong>
                                                    </td>
                                                    <td class="product-total">
                                                        <span class="amount"> <?= $current_firstname; ?></span>
                                                    </td>
                                                </tr>
                                                <tr class="cart_item">
                                                    <td class="product-name">
                                                         <strong class="product-quantity"> Second Name</strong>
                                                    </td>
                                                    <td class="product-total">
                                                        <span class="amount"><?= $current_secondname; ?></span>
                                                    </td>
                                                </tr>
												  <tr class="cart_item">
                                                    <td class="product-name">
                                                         <strong class="product-quantity"> Email</strong>
                                                    </td>
                                                    <td class="product-total">
                                                        <span class="amount"><?= $current_email; ?></span>
                                                    </td>
                                                </tr>
												  <tr class="cart_item">
                                                    <td class="product-name">
                                                         <strong class="product-quantity"> Location</strong>
                                                    </td>
                                                    <td class="product-total">
                                                        <span class="amount"><?= $current_location; ?></span>
                                                    </td>
                                                </tr>
												  <tr class="cart_item">
                                                    <td class="product-name">
                                                         <strong class="product-quantity"> Telephone</strong>
                                                    </td>
                                                    <td class="product-total">
                                                        <span class="amount"><?= $current_mobile; ?></span>
                                                    </td>
                                                </tr>
                                            </tbody>

                                        </table>
                                    </div>

                               </div>
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
