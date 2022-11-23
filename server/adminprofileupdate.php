<?php
session_start();

require_once 'user.php';
require_once 'dbc.php';

$user=new user();
//admin profile update
if(isset($_POST['adminprofileupdate_btn'])){
    $id=$user->check_validation($_POST['id']);
    $username=$user->check_validation($_POST['username']);
    $email=$user->check_validation($_POST['email']);
    $password=$user->check_validation($_POST['password']);
    $hash_pass=password_hash($password, PASSWORD_DEFAULT);

    if($user->admin_exist($email)){
      echo "<script>alert('Email already registered!')</script>";
      echo "<script>window.open('../dashboard.php', '_self')</script>";
    }else{
      if(isset($_FILES['newimage']['name'])&&!empty($_FILES['newimage']['name'])){
        $newimage=uniqid('', true).$_FILES['newimage']['name'];
        $newimage="image/".$newimage;

        $query="SELECT image FROM admin WHERE id=?;";
        $stmt=$dbconn->prepare($query);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result=$stmt->get_result();
        $row=$result->fetch_assoc();

        $oldimage=$row['image'];
        unlink("$oldimage");
      }else{
        $newimage=$oldimage;
      }
        $sql="UPDATE admin SET username=?, email=?, image=?, password=? WHERE id=?;";
        $stmt=$dbconn->prepare($sql);
        $stmt->bind_param("ssssi", $username, $email, $newimage, $hash_pass, $id);
        $stmt->execute();
        move_uploaded_file($_FILES['newimage']['tmp_name'], $newimage);
        echo "<script>alert('Successfully updated admin profile!')</script>";
        echo "<script>window.open('../dashboard.php', '_self')</script>";
    }
}
?>
