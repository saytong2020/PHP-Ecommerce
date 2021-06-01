<?php
      include ("../partials/connect.php");
      
 if(isset($_POST['update'])){
     $newid=$_POST['form_id'];
     $newname=$_POST['name'];
     $newprice=$_POST['price'];
     $newdescription=$_POST['description'];
     $newcategory=$_POST['category'];

     $fileName=$_FILES['file']['name'];
     $file_tmp=$_FILES['file']['tmp_name'];
     $file_new=time().$_FILES['file']['name'];
     $file_store="../uploads/".$file_new;
 
     move_uploaded_file($file_tmp,$file_store);

     $sql="UPDATE products set name='$newname',price='$newprice',description='$newdescription',category_id='$newcategory',picture='$file_new' where id='$newid'";
     $connect->query($sql);
     if(mysqli_query($connect,$sql)){
         header ('location: productsshow.php');

     }else{
         header ('location: adminindex.php');
     }
 }
 

?>