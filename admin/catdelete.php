<?php
include ("adminpartials/connect.php");
$newid=$_GET['cat_del'];
$sql="DELETE FROM categories where id='$newid'";
if(mysqli_query($connect,$sql)){
    header ('location: categoriesshow.php');
}else{
    echo "No Delete";
}

    


?>