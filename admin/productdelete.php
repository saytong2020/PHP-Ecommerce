<?php
include ("adminpartials/connect.php");
$newid=$_GET['pro_del'];
$sql="DELETE FROM products where id='$newid'";
if(mysqli_query($connect,$sql)){
    header ('location: productsshow.php');
}else{
    echo "No Delete";
}

    


?>