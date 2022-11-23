<?php
include_once 'server/userheader.php';
$grand_total=0;
$allitems=0;
$items=array();
?>
        <main>
            <!-- page__title-start -->
            <section class="page__title p-relative d-flex align-items-center" data-background="assets/img/bg/page-title-1.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="page__title-inner text-center">
                                <h1>Checkout</h1>

                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- page__title-end -->


            <!-- checkout-area start -->
            <section class="checkout-area pb-85">
                <div class="container">
                    <form action="server/action.php" method="post">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="checkbox-form">
                                    <h3>Billing Details</h3>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="country-select">
                                                <label>Country <span class="required">*</span></label>
                                                 <input type="text" placeholder="" name="country" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="checkout-form-list">
                                                <label>First Name <span class="required">*</span></label>
                                                <input type="text" placeholder="" name="firstname" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="checkout-form-list">
                                                <label>Last Name <span class="required">*</span></label>
                                                <input type="text" placeholder="" name="lastname" required>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="checkout-form-list">
                                                <label>Address <span class="required">*</span></label>
                                                <input type="text" placeholder="Street address" name="street" required>
                                            </div>
                                        </div>
                                    <div class="col-md-12">
                                            <div class="checkout-form-list">
                                                <label>Town / City <span class="required">*</span></label>
                                                <input type="text" placeholder="Town / City" name="city" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="checkout-form-list">
                                                <label>State / County <span class="required">*</span></label>
                                                <input type="text" placeholder="" name="county" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="checkout-form-list">
                                                <label>Postcode / Zip <span class="required">*</span></label>
                                                <input type="text" placeholder="Postcode / Zip" name="zip" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="checkout-form-list">
                                                <label>Email Address <span class="required">*</span></label>
                                                <input type="email" placeholder="" name="email" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="checkout-form-list">
                                                <label>Phone <span class="required">*</span></label>
                                                <input type="text" placeholder="mobile" name="mobile" required>
                                            </div>
                                        </div>

                                    </div>
                              </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="your-order mb-30 ">
                                    <h3>Your order</h3>
                                    <div class="your-order-table table-responsive">
                                        <table>
                                            <thead>
                                                <tr>
                                                    <th class="product-name">Product</th>
                                                    <th class="product-total">Total (USD)</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                              <?php foreach ($selectusercart as $row) { ?>
                                                <tr class="cart_item">
                                                    <td class="product-name">
                                                        <?= $row['productname']; ?> <strong class="product-quantity"> × <?= $row['quantity']; ?></strong>
                                                    </td>
                                                    <td class="product-total">
                                                        <span class="amount"><?= $row['total']; ?></span>
                                                    </td>
                                                </tr>
                                                 <?php $grand_total+=$row['total']; ?>
                                                 <?php
                                                 $items[]=$row['productname'];
                                                 $allitems=implode(',', $items);
                                                 ?>
                                                 <input type="hidden" name="products" value="<?= $allitems; ?>">
                                                 <input type="hidden" name="grand_total" value="<?= $grand_total; ?>">
                                              <?php } ?>
                                            </tbody>
                                            <tfoot>
                                                <tr class="cart-subtotal">
                                                    <th>Cart Subtotal (USD.)</th>
                                                    <td><span class="amount"> <?= $grand_total; ?></span></td>
                                                </tr>

                                                <tr class="order-total">
                                                    <th>Order Total (USD.)</th>
                                                    <td><strong><span class="amount"><?= $grand_total; ?></span></strong>
                                                    </td>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>

                                    <div class="payment-method">
                                        <div class="accordion" id="checkoutAccordion">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="checkoutOne">
                                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#bankOne" aria-expanded="true" aria-controls="bankOne">
                                                Direct Bank Transfer
                                                </button>
                                            </h2>
                                            <div id="bankOne" class="accordion-collapse collapse show" aria-labelledby="checkoutOne" data-bs-parent="#checkoutAccordion">
                                                <div class="accordion-body">
                                                 <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="paymentTwo">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#payment" aria-expanded="false" aria-controls="payment">
                                                Cheque Payment
                                                </button>
                                            </h2>
                                            <div id="payment" class="accordion-collapse collapse" aria-labelledby="paymentTwo" data-bs-parent="#checkoutAccordion">
                                                <div class="accordion-body">
                                                <p>Please send your cheque to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="paypalThree">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#paypal" aria-expanded="false" aria-controls="paypal">
                                                PayPal
                                                </button>
                                            </h2>
                                            <div id="paypal" class="accordion-collapse collapse" aria-labelledby="paypalThree" data-bs-parent="#checkoutAccordion">
                                                <div class="accordion-body">
                                                    <p>Pay via PayPal; you can pay with your credit card if you don’t have a
                                                    PayPal account.</p>
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="order-button-payment mt-20">
                                        <button type="submit" class="btn-tp" name="order_btn">Place order</button>
                                        </div>
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
