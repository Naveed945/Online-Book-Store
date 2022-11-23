<?php
session_start();

if(isset($_SESSION['user'])){
  header('location:index.php');
}
?>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
       <meta charset="utf-8">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <title>SIGN UP</title>
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <link rel="shortcut icon" type="image/x-icon" href="assets/img/logo.jpg">
      <!-- CSS here -->

      <link rel="stylesheet" href="assets/css/bootstrap.css">

      <link rel="stylesheet" href="assets/css/font-awesome-pro.css">
      <link rel="stylesheet" href="assets/flaticon/flaticon.css">
      <link rel="stylesheet" href="assets/css/default.css">
      <link rel="stylesheet" href="assets/css/style.css">
   </head>
   <body>

        <main>

            <!-- signup__area start -->
            <section class="signup__area po-rel-z1 pt-100 pb-100">
                <div class="container">
                   <div class="row">
                      <div class="col-xxl-6 offset-xxl-3 col-xl-6 offset-xl-3 col-lg-8 offset-lg-2">
                         <div class="sign__wrapper white-bg">

                            <div class="sign__form">
                               <form action="server/action.php" method="post">
                                  <div class="sign__input-wrapper mb-25">
                                     <h5>First Name</h5>
                                     <div class="sign__input">
                                        <input type="text" placeholder="First name" name="fname" required>
                                        <i class="fal fa-user"></i>
                                     </div>
                                  </div>
                                  <div class="sign__input-wrapper mb-25">
                                     <h5>Second Name</h5>
                                     <div class="sign__input">
                                        <input type="text" placeholder="Second name" name="sname" required>
                                        <i class="fal fa-user"></i>
                                     </div>
                                  </div>
                                  <div class="sign__input-wrapper mb-25">
                                     <h5> Email</h5>
                                     <div class="sign__input">
                                        <input type="text" placeholder="e-mail address" name="email" required>
                                        <i class="fal fa-envelope"></i>
                                     </div>
                                  </div>
                                  <div class="sign__input-wrapper mb-25">
                                     <h5> Location</h5>
                                     <div class="sign__input">
                                        <input type="text" placeholder="location" name="location" required>
                                        <!-- <i class="fal fa-envelope"></i> -->
                                     </div>
                                  </div>
                                  <div class="sign__input-wrapper mb-25">
                                     <h5> Telephone</h5>
                                     <div class="sign__input">
                                        <input type="text" placeholder="Telephone" name="mobile" required>
                                        <!-- <i class="fal fa-envelope"></i> -->
                                     </div>
                                  </div>
                                  <div class="sign__input-wrapper mb-25">
                                     <h5>Password</h5>
                                     <div class="sign__input">
                                        <input type="password" placeholder="Password" name="pass" required>
                                        <i class="fal fa-lock"></i>
                                     </div>
                                  </div>
                                  <div class="sign__input-wrapper mb-10">
                                     <h5>Re-Password</h5>
                                     <div class="sign__input">
                                        <input type="password" placeholder="Re-Password" name="rpass" required>
                                        <i class="fal fa-lock"></i>
                                     </div>
                                  </div>
                                  <div class="sign__action d-flex justify-content-between mb-30">
                                     <div class="sign__agree d-flex align-items-center">
                                        <input class="m-check-input" type="checkbox" id="m-agree" name="checkbox" required>
                                        <label class="m-check-label" for="m-agree">I agree to the <a href="#">Terms &amp; Conditions</a>
                                           </label>
                                     </div>
                                  </div>
                                  <button class="btn-tp w-100" name="signup_btn" type="submit"> <span></span> Sign Up</button>
                                  <div class="sign__new text-center mt-20">
                                     <p>Have an account? <a href="sign-in.php"> Sign In</a></p>
                                  </div>
                               </form>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
            </section>
            <!-- signup__area end -->

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
