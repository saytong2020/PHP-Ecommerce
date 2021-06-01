<?php
session_start();
if(empty($_SESSION['cart'])){
    $_SESSION['cart']=array();
}
array_push($_SESSION['cart'],$_GET['cart_id']);

?>

<p>Addtion Sucessful <a href="cartview.php">Add To Cart</a></p>