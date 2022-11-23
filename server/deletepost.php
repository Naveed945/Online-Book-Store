<?php
require_once 'dbc.php';
//deleting post from the database
if(isset($_GET['delete'])){
  $id=$_GET['delete'];

  $query="SELECT image FROM post WHERE id=?;";
  $stmt=$dbconn->prepare($query);
  $stmt->bind_param("i", $id);
  $stmt->execute();
  $result=$stmt->get_result();
  $row=$result->fetch_assoc();

  $ipath=$row['image'];
  unlink("$ipath");

  $sql="DELETE FROM post WHERE id=?;";
  $stmt=$dbconn->prepare($sql);
  $stmt->bind_param("i", $id);
  $stmt->execute();
  echo "<script>alert('successfully deleted!');</script>'";
  echo "<script>window.open('../dashboard.php', '_self');</script>";
}else{
  echo "<script>alert('an error occured...please try again!');</script>'";
  echo "<script>window.open('../dashboard.php', '_self');</script>";
}
?>
