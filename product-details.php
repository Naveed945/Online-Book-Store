<?php
include_once 'server/userheader.php';
$product_id=$_GET['view'];
$selectproductbyid=$controller->select_productbyid($product_id);
$selectcommentbyid=$controller->select_commentbyid($product_id);
?>
        <main>
            <!-- page__title-start -->
            <section class="page__title p-relative d-flex align-items-center" data-background="assets/img/bg/page-title-1.jpg" style="background-image: url(_assets/img/page-title/page-title-1.html);">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="page__title-inner text-center">
                                <h1>Product Details</h1>

                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- page__title-end -->

            <!-- product-details-start -->
            <section class="product-details pt-90 pb-50">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6">
                            <div class="product__modal-box d-flex">
                                <div class="tab-content mb-20" id="product-detailsContent">
                                    <div class="tab-pane fade active show" id="pro-one" role="tabpanel" aria-labelledby="pro-one-tab">
                                        <div class="product__modal-img product__thumb w-img">
                                            <img src="server/<?= $selectproductbyid['productimage']; ?>" alt="">
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="pro-two" role="tabpanel" aria-labelledby="pro-two-tab">
                                        <div class="product__modal-img product__thumb w-img">
                                            <img src="server/<?= $selectproductbyid['productimage']; ?>" alt="">
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="pro-three" role="tabpanel" aria-labelledby="pro-three-tab">
                                        <div class="product__modal-img product__thumb w-img">
                                            <img src="server/<?= $selectproductbyid['productimage']; ?>" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <div class="product__modal-content-2">
                                <h4><?= $selectproductbyid['productname']; ?></h4>

                                <div class="product__price mb-25">
                                    <span>$. <?= $selectproductbyid['price']; ?></span>
                                </div>
                                <div class="product__modal-des mb-30">
                                    <p><?= substr($selectproductbyid['description'], 0, 100); ?>...</p>
                                </div>
                                <form action="server/action.php" method="post">
                                  <input type="hidden" value="<?= $current_id; ?>" name="userid">
                                  <input type="hidden" value="<?= $selectproductbyid['productimage']; ?>" name="productimage">
                                  <input type="hidden" value="<?= $selectproductbyid['productname']; ?>" name="productname">
                                  <input type="hidden" value="<?= $selectproductbyid['price']; ?>" name="price">
                                  <input type="hidden" value="<?= $selectproductbyid['price']*1/2; ?>" name="rentprice">
                                  <input type="hidden" value="<?= $selectproductbyid['price']; ?>" name="total">
                                <div class="pro-quan-area d-sm-flex align-items-center">
                                    <div class="pro-cart-btn">
                                      <p><b>Quantity</p>
                                      <div class="cart-plus-minus"><input type="text" name="qty" id="sst" maxlength="12" value="1" title="Quantity:" class="input-text qty"><div class="dec qtybutton"><button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst ) &amp;&amp; sst > 0 ) result.value--;return false;"
                                       class="reduced items-count" type="button">-</button></div><div class="inc qtybutton"><button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst )) result.value++;return false;"
                                       class="increase items-count" type="button">+</button></div></div>
                                        <button class="add-cart-btn mb-20" type="submit" name="cart_btn">+ Add to Cart</button>
                                        <button class="add-cart-btn mb-20" type="submit" name="rentlist_btn">+ Add to Rent</button>
                                    </div>
                                </div>
                              </form>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-70">
                        <div class="col-xl-12">
                            <div class="product__details-tab">
                                <div class="product__details-tab-nav text-center mb-45">
                                    <nav>
                                        <div class="nav nav-tabs justify-content-start justify-content-sm-center" id="pro-details" role="tablist">
                                            <a class="nav-item nav-link active" id="des-tab" data-bs-toggle="tab" href="#des" role="tab" aria-controls="des" aria-selected="true">Description</a>

                                            <a class="nav-item nav-link" id="review-tab" data-bs-toggle="tab" href="#review" role="tab" aria-controls="review" aria-selected="false">Reviews (<?= $controller->count_comment($product_id); ?>)</a>
                                        </div>
                                    </nav>
                                </div>
                                <div class="tab-content" id="pro-detailsContent">
                                    <div class="tab-pane fade active show" id="des" role="tabpanel">
                                        <div class="product__details-des mb-20">
                                            <p><?= $selectproductbyid['description']; ?></p>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="review" role="tabpanel">
                                        <div class="product__details-review mb-35">
                                            <div class="postbox__comments">
                                                <div class="postbox__comment-title mb-30">
                                                    <h3>Reviews (<?= $controller->count_comment($product_id); ?>)</h3>
                                                </div>
                                                <div class="latest-comments mb-30">
                                                    <ul>
                                                      <?php foreach ($selectcommentbyid as $row) { ?>
                                                        <li>
                                                            <div class="comments-box">
                                                                <div class="comments-avatar">
                                                                    <img src="assets/img/author/avater-1.png" alt="">
                                                                </div>
                                                                <div class="comments-text">
                                                                    <div class="avatar-name">
                                                                        <h5><?= $row['firstname']; ?> <?= $row['secondname']; ?></h5>
                                                                        <span> <?= $controller->timeinago($row['date']); ?> </span>
                                                                    </div>
                                                                    <p><?= $row['comment']; ?></p>
                                                                </div>
                                                            </div>
                                                        </li>
                                                      <?php } ?>
                                                    </ul>
                                                </div>
                                            </div>

                                            <div class="post-comments-form">
                                                <form id="contacts-form" class="conatct-post-form" action="server/action.php" method="post">
                                                  <input type="hidden" name="productid" value="<?= $product_id; ?>">
                                                  <input type="hidden" name="firstname" value="<?= $current_firstname; ?>">
                                                  <input type="hidden" name="secondname" value="<?= $current_secondname; ?>">
                                                    <div class="row">
                                                        <div class="col-xl-12>
                                                            <div class="contact-icon p-relative contacts-message" >
                                                                <textarea name="comments" id="comments" cols="100" rows="5" placeholder="Comments" required></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-12">
                                                            <button class="add-cart-btn" type="submit" name="comments_btn">Post comment</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-50">
                        <div class="col-xl-12">
                            <div class="trending__info text-center">
                                <h5>Trending Books</h5>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-40">
                      <?php foreach ($selectproduct as $row) { ?>
                        <div class="col-xl-3 col-lg-3 col-sm-6">
                            <div class="product__item mb-20">
                                <div class="product__thumb w-img fix">
                                    <a href="product-details.php?view=<?= $row['id']; ?>">
                                        <img src="server/<?= $row['productimage']; ?>" alt="">
                                    </a>
                                    <div class="product__action transition-3">
                                        <ul>
                                            <li>
                                                <a href="#">
                                                    <svg viewBox="0 0 22 22">
                                                    <g>
                                                        <path d="M18,19H6c-0.5,0-0.92-0.37-0.99-0.86L3.13,5H1C0.45,5,0,4.55,0,4s0.45-1,1-1h3c0.5,0,0.92,0.37,0.99,0.86L6.87,17h10.39
                                                        l2.4-8H11c-0.55,0-1-0.45-1-1s0.45-1,1-1h10c0.32,0,0.61,0.15,0.8,0.4c0.19,0.25,0.25,0.58,0.16,0.88l-3,10
                                                        C18.83,18.71,18.44,19,18,19z"></path>
                                                    </g>
                                                    </svg>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <svg viewBox="0 0 22 22">
                                                    <path d="M20.26,11.3c2.31-2.36,2.31-6.18-0.02-8.53C19.11,1.63,17.6,1,16,1c0,0,0,0,0,0c-1.57,0-3.05,0.61-4.18,1.71c0,0,0,0,0,0
                                                    L11,3.41l-0.81-0.69c0,0,0,0,0,0C9.06,1.61,7.58,1,6,1C4.4,1,2.89,1.63,1.75,2.77c-2.33,2.35-2.33,6.17-0.02,8.53
                                                    c0,0,0,0.01,0.01,0.01l0.01,0.01c0,0,0,0,0,0c0,0,0,0,0,0L11,20.94l9.25-9.62c0,0,0,0,0,0c0,0,0,0,0,0L20.26,11.3
                                                    C20.26,11.31,20.26,11.3,20.26,11.3z M3.19,9.92C3.18,9.92,3.18,9.92,3.19,9.92C3.18,9.92,3.18,9.91,3.18,9.91
                                                    c-1.57-1.58-1.57-4.15,0-5.73C3.93,3.42,4.93,3,6,3c1.07,0,2.07,0.42,2.83,1.18C8.84,4.19,8.85,4.2,8.86,4.21
                                                    c0.01,0.01,0.01,0.02,0.03,0.03l1.46,1.25c0.07,0.06,0.14,0.09,0.22,0.13c0.01,0,0.01,0.01,0.02,0.01c0.13,0.06,0.27,0.1,0.41,0.1
                                                    c0.08,0,0.16-0.03,0.25-0.05c0.03-0.01,0.07-0.01,0.1-0.02c0.07-0.03,0.13-0.07,0.2-0.11c0.03-0.02,0.07-0.03,0.1-0.06l1.46-1.24
                                                    c0.01-0.01,0.02-0.02,0.03-0.03c0.01-0.01,0.03-0.01,0.04-0.02C13.93,3.42,14.93,3,16,3c0,0,0,0,0,0c1.07,0,2.07,0.42,2.83,1.18
                                                    c1.56,1.58,1.56,4.15,0,5.73c0,0,0,0.01-0.01,0.01c0,0,0,0,0,0L11,18.06L3.19,9.92z"></path>
                                                    </svg>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
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
                                            <a href="#">Books</a>
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
