<?php
session_start();

require_once 'controller.php';

$controller=new controller();

//Register

if(isset($_POST['reg_btn'])){

  $firstname=$controller->check_validation($_POST['firstname']);
  $lastname=$controller->check_validation($_POST['lastname']);
  $email=$controller->check_validation($_POST['email']);
  $location=$controller->check_validation($_POST['location']);
  $mobile=$controller->check_validation($_POST['mobile']);
  $password=$controller->check_validation($_POST['password']);
  $rpass=$controller->check_validation($_POST['rpass']);
  $hash_pass=password_hash($password, PASSWORD_DEFAULT);

  if($password==$rpass){
    if($controller->user_exist($email)){
      echo "<script>alert('Email already registered!')</script>";
      echo "<script>window.open('../register.php', '_self')</script>";}
      else{
            if($controller->user_existp($mobile)){
                echo "<script>alert('mobile number already registered!')</script>";
                echo "<script>window.open('../register.php', '_self')</script>";}
            else{
                if($controller->register($firstname, $lastname, $email,$location, $mobile, $hash_pass)){
                    $_SESSION['user']=$email;
                    echo "<script>alert('Successfully registered!')</script>";
                    echo "<script>window.open('../index.php', '_self')</script>";}
    }}
  }else{
    echo "<script>alert('Password do not match!')</script>";
    echo "<script>window.open('../register.php', '_self')</script>";
  }
}


// if(isset($_POST['reg_btn'])){

//     $firstname=$controller->check_validation($_POST['firstname']);
//     $lastname=$controller->check_validation($_POST['lastname']);
//     $email=$controller->check_validation($_POST['email']);
//     $password=$controller->check_validation($_POST['password']);
//     $hash_pass=password_hash($password, PASSWORD_DEFAULT);

//       if($controller->user_exist($email)){
//         $_SESSION['msg']='Email already registered!';
//         $_SESSION['msg_box']='danger';
//         header("location:../register.php");
//       }else{
//         if($controller->register($firstname, $lastname, $email,  $hash_pass)){

//           $_SESSION['user']=$email;
//           header("location:../index.php");
//         }
//       }
// }
//user login
if(isset($_POST['log_btn'])){
    $email = $controller->check_validation($_POST['email']);
    $password = $controller->check_validation($_POST['password']);

    $loggedinuser = $controller->login($email);

    if($loggedinuser!= null){
      if(password_verify($password, $loggedinuser['password'])){
        $_SESSION['user']=$email;
        header("location:../index.php");
      }else{
        $_SESSION['msg']='Password does not match!';
        $_SESSION['msg_box']='danger';
        header("location:../login.php");
      }
    }else{
      $_SESSION['msg']='User is not registered!';
      $_SESSION['msg_box']='danger';
      header("location:../login.php");
    }
}

//Update user
if(isset($_POST['updateuser_btn'])){

    $cltid=$controller->check_validation($_POST['cltid']);
    $name=$controller->check_validation($_POST['name']);
    $email=$controller->check_validation($_POST['email']);
    $password=$controller->check_validation($_POST['password']);
    $hash_pass=password_hash($password, PASSWORD_DEFAULT);
    $location=$controller->check_validation($_POST['location']);
    $telephone=$controller->check_validation($_POST['telephone']);
    $image=uniqid('', true).$_FILES['image']['name'];
    $image="image/".$image;
    $controller->update_user($name, $email, $hash_pass, $image, $location, $telephone, $cltid);
    $_SESSION['msg']='You have successfully updated your Profile:)';
    $_SESSION['msg_box']='success';
    header('location:../profile.php?userprofile='.$cltid.'');
    move_uploaded_file($_FILES['image']['tmp_name'], $image);

}


//admin login
if(isset($_POST['adminlogin_btn'])){

  // $2y$10$RfjM8sWP8ESl8ZKUE8mIm.e29FSAR2XDVWcXjeQ47kWNabVd1bpy.
  // $2y$10$vDtDte5GCio0IoTw5MeEoO/qDXFE5bviQS8VpPVYel9tCgpFJtp6. orginal
    $username = $controller->check_validation($_POST['username']);
    $password = $controller->check_validation($_POST['password']);
    // $2y$10$vDtDte5GCio0IoTw5MeEoO/qDXFE5bviQS8VpPVYel9tCgpFJtp6.

    $loggedinadmin = $controller->admin_login($username);

    if($loggedinadmin!= null){
      if(password_verify($password, $loggedinadmin['password'])){
        $_SESSION['admin']=$username;
        header("location:../dashboard.php");
      }else{
        $_SESSION['msg']='Password does not match';
        $_SESSION['msg_box']='danger';
        header('location:../adminlogin.php');
      }
    }else{
      $_SESSION['msg']='Admin is not registered';
      $_SESSION['msg_box']='danger';
      header('location:../adminlogin.php');
    }
}
//update admin
if(isset($_POST['updateadmin_btn'])){

    $adminid=$controller->check_validation($_POST['adminid']);
    $email=$controller->check_validation($_POST['email']);
    $password=$controller->check_validation($_POST['password']);
    $hash_pass=password_hash($password, PASSWORD_DEFAULT);

    if(isset($_FILES['profile']['name'])&&!empty($_FILES['profile']['name'])){
    $profile=uniqid('', true).$_FILES['profile']['name'];
    $profile="image/".$profile;
    $checkstaffprofile=$controller->staff_profile($adminid);

    $oldprofile=$checkstaffprofile['profile'];
    unlink("$oldprofile");
  }else{
    $profile=$oldprofile;
  }


    $controller->update_admin($email, $hash_pass, $profile, $adminid);
    $_SESSION['msg']='You have successfully updated your profile :)';
    $_SESSION['msg_box']='success';
    header('location:../profile.php');
    move_uploaded_file($_FILES['profile']['tmp_name'], $profile);

}





//books

//Creating books 
if(isset($_POST['createbook_btn'])){
	$name=$controller->check_validation($_POST['name']);
	$amount=$controller->check_validation($_POST['amount']);
	$category=$controller->check_validation($_POST['category']);
	$author=$controller->check_validation($_POST['author']);
    $description=$_POST['richtext'];
	$sellername=$controller->check_validation($_POST['sellername']);
    $image=uniqid('', true).$_FILES['image']['name'];
    $image="image/".$image;
    $controller->create_books($name, $amount, $category, $author, $description, $sellername, $image);
	 header("location: ../books.php");
    move_uploaded_file($_FILES['image']['tmp_name'], $image);

}

//Creating books 
if(isset($_POST['createbookuser_btn'])){
	$name=$controller->check_validation($_POST['name']);
	$amount=$controller->check_validation($_POST['amount']);
	$category=$controller->check_validation($_POST['category']);
	$author=$controller->check_validation($_POST['author']);
    $description=$_POST['richtext'];
	$sellername=$controller->check_validation($_POST['sellername']);
    $image=uniqid('', true).$_FILES['image']['name'];
    $image="image/".$image;
    $controller->create_books($name, $amount, $category, $author, $description, $sellername, $image);
	 header("location: ../index.php");
    move_uploaded_file($_FILES['image']['tmp_name'], $image);

}


//update books

if(isset($_POST['updatebook_btn'])){

  $bookid=$controller->check_validation($_POST['bookid']);
    $name=$controller->check_validation($_POST['name']);
	$amount=$controller->check_validation($_POST['amount']);
	$category=$controller->check_validation($_POST['category']);
	$author=$controller->check_validation($_POST['author']);
    $description=$_POST['richtext'];
	$sellername=$controller->check_validation($_POST['sellername']);
    $image=uniqid('', true).$_FILES['image']['name'];
    $image="image/".$image;
  $controller->update_books($name, $amount, $category, $author, $description, $sellername, $image, $bookid);
  header("location: ../bookedit.php?bookid=".$bookid."");
     move_uploaded_file($_FILES['image']['tmp_name'], $image);
}


//deleting books
if(isset($_GET['bookdel'])){
  $id=$_GET['bookdel'];

  $controller->delete_books($id);
  header("location:../books.php");
}


//books


//CART
//adding cart
if(isset($_POST['cart_btn'])){
  $userid=$controller->check_validation($_POST['userid']);
  $image=$controller->check_validation($_POST['image']);
  $name=$controller->check_validation($_POST['name']);
  $qty=$controller->check_validation($_POST['qty']);
  $amount=$controller->check_validation($_POST['amount']);
  $total=$amount * $qty;
  $type="cart";

  $controller->insert_cart($userid, $image, $name, $qty, $amount, $total, $type);
  echo "<script>alert('Book added to cart Successfully!')</script>";
  echo "<script>window.open('../cart.php', '_self')</script>";

}


//deleting item from cart
if(isset($_GET['delcart'])){
  $id=$_GET['delcart'];
  $controller->delete_cart($id);
  header("location:../cart.php");
}



//CART

//ORDERS
//Submit orders
if(isset($_POST['order_btn'])){
  $userid=$controller->check_validation($_POST['userid']);
  $country=$controller->check_validation($_POST['country']);
  $firstname=$controller->check_validation($_POST['firstname']);
  $lastname=$controller->check_validation($_POST['lastname']);
  $street=$controller->check_validation($_POST['street']);
  $city=$controller->check_validation($_POST['city']);
  $county=$controller->check_validation($_POST['state']);
  $zip=$controller->check_validation($_POST['zip']);
  $email=$controller->check_validation($_POST['email']);
  $mobile=$controller->check_validation($_POST['phone']);
  $cardno=$controller->check_validation($_POST['cardno']);
  $expiry=$controller->check_validation($_POST['expiry']);
  $cardcode=$controller->check_validation($_POST['cardcode']);
  $products=$controller->check_validation($_POST['books']);
  $grand_total=$controller->check_validation($_POST['grand_total']);

  $controller->insert_order($userid,$country, $firstname, $lastname, $street, $city, $county, $zip, $email, $mobile, $cardno, $expiry, $cardcode, $products, $grand_total);
  echo "<script>alert('Thank you for Your Order. Await processing!')</script>";
  $controller->empty($userid);
  header("location:../receipt.php?id=$email");
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
//ORDERS

//USERS
//deleting user
if(isset($_GET['userdel'])){
  $id=$_GET['userdel'];
  $controller->delete_user($id);
  header("location:../customers.php");
}
//USERS
