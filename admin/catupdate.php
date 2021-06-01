<?php
      include ("../partials/connect.php");
      
 if(isset($_POST['update'])){
     $newid=$_POST['form_id'];
     $newname=$_POST['name'];
    

     $sql="UPDATE categories set cat_name='$newname' where id='$newid'";
     $connect->query($sql);
     if(mysqli_query($connect,$sql)){
         header ('location: categoriesshow.php');

     }else{
         header ('location: adminindex.php');
     }
 }
 

?>