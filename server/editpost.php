<?php
session_start();

require_once 'user.php';
require_once 'dbc.php';

$user=new user();
//admin profile update
if(isset($_POST['editpost_btn'])){
    $id=$user->check_validation($_POST['id']);
    $roadname=$user->check_validation($_POST['roadname']);
    $conditions=$user->check_validation($_POST['conditions']);
    $description=$user->check_validation($_POST['description']);

      if(isset($_FILES['newimage']['name'])&&!empty($_FILES['newimage']['name'])){
        $newimage=uniqid('', true).$_FILES['newimage']['name'];
        $newimage="image/".$newimage;

        $query="SELECT image FROM post WHERE id=?;";
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
        $sql="UPDATE post SET roadname=?, conditions=?, description=?, image=? WHERE id=?;";
        $stmt=$dbconn->prepare($sql);
        $stmt->bind_param("ssssi", $roadname, $conditions, $description, $newimage, $id);
        $stmt->execute();
        move_uploaded_file($_FILES['newimage']['tmp_name'], $newimage);
        echo "<script>alert('Successfully updated post!')</script>";
        echo "<script>window.open('../dashboard.php', '_self')</script>";
}
?>
