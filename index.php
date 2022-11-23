<?php include_once 'server/userheader.php'; ?>

        <main>


            <!-- product-details-start -->
            <section class="shop-details pt-90 pb-90">
                <div class="container">
                    <div class="row">
                        <div class=" col-md-10 mx-auto">
                            <div class="shop-main-area mb-40">
                                <div class="tab-content" id="nav-tabContent">
                                    <div class="tab-pane fade active show" id="tab1">
                                        <div class="row">
                                          <?php
                                          foreach ($selectproduct as $row) {
                                          ?>
                                            <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6">
                                                <div class="product__item mb-20">
                                                    <div class="product__thumb w-img fix">
                                                        <a href="product-details.php?view=<?= $row['id']; ?>">
                                                            <img src="server/<?= $row['productimage']; ?>" alt="">
                                                        </a>
                                                        <div class="product__action transition-3">
                                                            <ul>
                                                               <li>
                                                                  <a href="product-details.php?view=<?= $row['id']; ?>">
                                                                     <svg viewBox="0 0 22 22">
                                                                        <path d="M11,19c-6.53,0-10.42-7.23-10.58-7.53L0.17,11l0.25-0.47C0.58,10.23,4.47,3,11,3s10.42,7.23,10.58,7.53L21.83,11l-0.25,0.47
                                                                        C21.42,11.77,17.53,19,11,19z M2.46,11c0.92,1.49,4.08,6,8.54,6c4.48,0,7.63-4.51,8.54-6C18.62,9.52,15.46,5,11,5
                                                                        C6.52,5,3.37,9.51,2.46,11z M11,15c-2.21,0-4-1.79-4-4s1.79-4,4-4s4,1.79,4,4S13.21,15,11,15z M11,9c-1.1,0-2,0.9-2,2s0.9,2,2,2
                                                                        s2-0.9,2-2S12.1,9,11,9z"></path>
                                                                     </svg>
                                                                  </a>
                                                               </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product__content">
                                                      <div class="product__tag product__tag-4">
                                                        <span>
                                                          <a href="product-details.php?view=<?= $row['id']; ?>"><?= $row['sellername']; ?></a>
                                                        </span>
                                                      </div>
                                                        <h3 class="product__title">
                                                            <a href="product-details.php?view=<?= $row['id']; ?>"><?= $row['productname']; ?></a>
                                                        </h3>
                                                        <div class="product__price product__price-4 mb-10">
                                                            <span class="price">$ USD. <?= $row['price']; ?></span>
                                                        </div>
                                                        <div class="product__select-button">
                                                            <a href="product-details.php?view=<?= $row['id']; ?>" class="select-btn w-100">Select Options</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                              <?php } ?>
                                      </div>
                                    </div>
                               </div>
                            </div>
                       </div>
                    </div>
                </div>
            </section>
            <!-- product-details-end -->


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
