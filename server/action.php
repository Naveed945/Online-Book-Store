<?php
session_start();

require_once 'controller.php';

$controller=new controller();
//signup
if(isset($_POST['signup_btn'])){

    $fname=$controller->check_validation($_POST['fname']);
    $sname=$controller->check_validation($_POST['sname']);
    $email=$controller->check_validation($_POST['email']);
    $location=$controller->check_validation($_POST['location']);
    $mobile=$controller->check_validation($_POST['mobile']);
    $pass=$controller->check_validation($_POST['pass']);
    $rpass=$controller->check_validation($_POST['rpass']);
    $hash_pass=password_hash($pass, PASSWORD_DEFAULT);

    if($pass==$rpass){
      if($controller->user_exist($email)){
        echo "<script>alert('Email already registered!')</script>";
        echo "<script>window.open('../sign-up.php', '_self')</script>";
      }else{
        if($controller->register($fname, $sname, $email, $location, $mobile, $hash_pass)){

          $_SESSION['user']=$email;

          echo "<script>alert('Successfully registered!')</script>";
          echo "<script>window.open('../index.php', '_self')</script>";
        }
      }
    }else{
      echo "<script>alert('Password do not match!')</script>";
      echo "<script>window.open('../sign-up.php', '_self')</script>";
    }
}
//user login
if(isset($_POST['signin_btn'])){
    $email = $controller->check_validation($_POST['email']);
    $password = $controller->check_validation($_POST['password']);

    $loggedinuser = $controller->login($email);

    if($loggedinuser!= null){
      if(password_verify($password, $loggedinuser['password'])){
        $_SESSION['user']=$email;
        echo "<script>alert('Successfully logged in as a User')</script>";
        echo "<script>window.open('../index.php', '_self')</script>";
      }else{
        echo "<script>alert('Password does not match')</script>";
        echo "<script>window.open('../sign-in.php', '_self')</script>";
      }
    }else{
      echo "<script>alert('User is not registered')</script>";
      echo "<script>window.open('../sign-in.php', '_self')</script>";
    }
}
//admin login
if(isset($_POST['adminlogin_btn'])){
    $email = $controller->check_validation($_POST['email']);
    $password = $controller->check_validation($_POST['password']);

    $loggedinadmin = $controller->admin_login($email);

    if($loggedinadmin!= null){
      if(password_verify($password, $loggedinadmin['password'])){
        $_SESSION['admin']=$email;
        header("location:../dashboard.php");
      }else{
        echo "<script>alert('Password does not match')</script>";
        echo "<script>window.open('../login.php', '_self')</script>";
      }
    }else{
      echo "<script>alert('Admin is not registered')</script>";
      echo "<script>window.open('../login.php', '_self')</script>";
    }
}
//Seller uploading products to the database
if(isset($_POST['upload_btn'])){
    $pname=$controller->check_validation($_POST['pname']);
    $pimage=uniqid('', true).$_FILES['pimage']['name'];
    $pimage="image/".$pimage;
    $sname=$controller->check_validation($_POST['sname']);
    $price=$controller->check_validation($_POST['price']);
    $location=$controller->check_validation($_POST['location']);
    $description=$controller->check_validation($_POST['description']);

    $controller->upload_product($pname, $pimage, $sname, $price, $location, $description);
    echo "<script>alert('Book Uploaded successfully!')</script>";
    echo "<script>window.open('../seller.php', '_self')</script>";
    move_uploaded_file($_FILES['pimage']['tmp_name'], $pimage);
}
//Edit product in the database
if(isset($_POST['editproduct_btn'])){
    $productid=$controller->check_validation($_POST['productid']);
    $productname=$controller->check_validation($_POST['productname']);
    $newimage=uniqid('', true).$_FILES['newimage']['name'];
    $newimage="image/".$newimage;
    $sellername=$controller->check_validation($_POST['sellername']);
    $price=$controller->check_validation($_POST['price']);
    $description=$controller->check_validation($_POST['description']);

    $controller->update_product($productname, $newimage, $sellername, $price, $description, $productid);
    echo "<script>alert('Book Updated successfully!')</script>";
    echo "<script>window.open('../product.php', '_self')</script>";
    move_uploaded_file($_FILES['newimage']['tmp_name'], $newimage);
}
//Admin uploading products to the database
if(isset($_POST['adminupload_btn'])){
    $pname=$controller->check_validation($_POST['pname']);
    $pimage=uniqid('', true).$_FILES['pimage']['name'];
    $pimage="image/".$pimage;
    $sname=$controller->check_validation($_POST['sname']);
    $price=$controller->check_validation($_POST['price']);
    $location=$controller->check_validation($_POST['location']);
    $description=$controller->check_validation($_POST['description']);

    $controller->upload_product($pname, $pimage, $sname, $price, $location, $description);
    echo "<script>alert('Book Uploaded successfully!')</script>";
    echo "<script>window.open('../createproduct.php', '_self')</script>";
    move_uploaded_file($_FILES['pimage']['tmp_name'], $pimage);
}
//Adding a comment to a product
if(isset($_POST['comments_btn'])){
    $productid=$controller->check_validation($_POST['productid']);
    $firstname=$controller->check_validation($_POST['firstname']);
    $secondname=$controller->check_validation($_POST['secondname']);
    $comments=$controller->check_validation($_POST['comments']);

    $controller->insert_comment($productid, $firstname, $secondname, $comments);
    echo "<script>alert('Comment sent Successfully!')</script>";
    echo "<script>window.open('../index.php', '_self')</script>";
}
//adding cart
if(isset($_POST['cart_btn'])){
  $userid=$controller->check_validation($_POST['userid']);
  $productimage=$controller->check_validation($_POST['productimage']);
  $productname=$controller->check_validation($_POST['productname']);
  $qty=$controller->check_validation($_POST['qty']);
  $price=$controller->check_validation($_POST['price']);
  $total=$price * $qty;
  $type="cart";

  $controller->insert_cart($userid, $productimage, $productname, $qty, $price, $total, $type);
  echo "<script>alert('Book added to cart Successfully!')</script>";
  echo "<script>window.open('../cart.php', '_self')</script>";

}
//deleting item from cart
if(isset($_GET['delcart'])){
  $id=$_GET['delcart'];
  $controller->delete_cart($id);
  header("location:../cart.php");
}
//deleting item from rentlist
if(isset($_GET['delrentlist'])){
  $id=$_GET['delrentlist'];
  $controller->delete_wishlist($id);
  header("location:../rentlist.php");
}
//adding Rentlist
if(isset($_POST['rentlist_btn'])){
  $userid=$controller->check_validation($_POST['userid']);
  $productimage=$controller->check_validation($_POST['productimage']);
  $productname=$controller->check_validation($_POST['productname']);
  $price=$controller->check_validation($_POST['rentprice']);
	$total=$price;
  $type="wishlist";

  $controller->insert_wishlist($userid, $productimage, $productname, $price, $total, $type);
  echo "<script>alert('Book added to Rentlist Successfully!')</script>";
  echo "<script>window.open('../rentlist.php', '_self')</script>";

}
//Submit orders
if(isset($_POST['order_btn'])){
  $country=$controller->check_validation($_POST['country']);
  $firstname=$controller->check_validation($_POST['firstname']);
  $lastname=$controller->check_validation($_POST['lastname']);
  $street=$controller->check_validation($_POST['street']);
  $city=$controller->check_validation($_POST['city']);
  $county=$controller->check_validation($_POST['county']);
  $zip=$controller->check_validation($_POST['zip']);
  $email=$controller->check_validation($_POST['email']);
  $mobile=$controller->check_validation($_POST['mobile']);
  $products=$controller->check_validation($_POST['products']);
  $grand_total=$controller->check_validation($_POST['grand_total']);

  $controller->insert_order($country, $firstname, $lastname, $street, $city, $county, $zip, $email, $mobile, $products, $grand_total);
  echo "<script>alert('Thank you for Your Order. Await processing!')</script>";
  header("location:../receipt.php?id=$email");
}
// submit rent orders
if(isset($_POST['order_rent_btn'])){
  $country=$controller->check_validation($_POST['country']);
  $firstname=$controller->check_validation($_POST['firstname']);
  $lastname=$controller->check_validation($_POST['lastname']);
  $street=$controller->check_validation($_POST['street']);
  $city=$controller->check_validation($_POST['city']);
  $county=$controller->check_validation($_POST['county']);
  $zip=$controller->check_validation($_POST['zip']);
  $email=$controller->check_validation($_POST['email']);
  $mobile=$controller->check_validation($_POST['mobile']);
  $products=$controller->check_validation($_POST['products']);
  $grand_total=$controller->check_validation($_POST['grand_total']);

  $controller->insert_order($country, $firstname, $lastname, $street, $city, $county, $zip, $email, $mobile, $products, $grand_total);
  echo "<script>alert('Thank you for Your Order. Await processing!')</script>";
  header("location:../rentreceipt.php?id=$email");
}

//verify item from orders
if(isset($_GET['verify'])){
  $id=$_GET['verify'];
  $controller->verify_order($id);
  header("location:../orders.php");
}
//deleting item from orders
if(isset($_GET['orderdel'])){
  $id=$_GET['orderdel'];
  $controller->delete_order($id);
  header("location:../orders.php");
}
//deleting item from products
if(isset($_GET['productdel'])){
  $id=$_GET['productdel'];
  $controller->delete_product($id);
  header("location:../product.php");
}
//deleting user
if(isset($_GET['userdel'])){
  $id=$_GET['userdel'];
  $controller->delete_user($id);
  header("location:../customers.php");
}
//update admin
if(isset($_POST['updateadmin_btn'])){

    $adminid=$controller->check_validation($_POST['adminid']);
    $firstname=$controller->check_validation($_POST['firstname']);
    $secondname=$controller->check_validation($_POST['secondname']);
    $email=$controller->check_validation($_POST['email']);
    $location=$controller->check_validation($_POST['location']);
    $mobile=$controller->check_validation($_POST['mobile']);
    $password=$controller->check_validation($_POST['password']);
    $hash_pass=password_hash($password, PASSWORD_DEFAULT);

    $controller->update_admin($firstname, $secondname, $email, $location, $mobile, $hash_pass, $adminid);
    echo "<script>alert('Successfully updated admin!')</script>";
    echo "<script>window.open('../adminprofile.php', '_self')</script>";

}
?>
