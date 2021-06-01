<?php

if(isset($_POST['btnSave'])){
    include ("adminpartials/session.php");
   include ("../partials/connect.php");

    $name = $_POST['name'];
    $price = $_POST['price'];
    $description = $_POST['description'];
    $category = $_POST['category'];

    $fileName=$_FILES['file']['name'];
    $file_tmp=$_FILES['file']['tmp_name'];
    $file_new=time().$_FILES['file']['name'];
    $file_store="../uploads/".$file_new;

    move_uploaded_file($file_tmp,$file_store);

    $sql="INSERT INTO products(name,price,picture,description,category_id) VALUES ('$name','$price','$file_new','$description','$category')";

    $result=$connect->query($sql);


   if($result){

       header ('location: productsshow.php');
   }else{
    echo "<script>alert('Can not Success')</script>";
   }
}

?>