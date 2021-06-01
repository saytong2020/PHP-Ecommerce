<?php
include ("adminpartials/session.php");
include ("../partials/connect.php");
$category=$_POST['name'];


$sql="INSERT INTO categories (cat_name) VALUES ('$category')";

$result=$connect->query($sql);


   if($result){

       header ('location: categories.php');
   }else{
    echo "<script>alert('Can not Success')</script>";
   }


?>