<!DOCTYPE html>
<html>

<?php
include ("adminpartials/session.php");
include ("adminpartials/head.php");
?>

<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

        <?php
  include ("adminpartials/header.php");
  include ("adminpartials/aside.php");
  ?>
        <!-- Left side column. contains the logo and sidebar -->


        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    Dashboard
                    <small>Control panel</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active">Dashboard</li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-md-9">
                    <?php
                    include ('adminpartials/connect.php');
                    $id=$_GET['pro_id'];
                    $sql="SELECT * FROM products WHERE id='$id'";
                    $resaul=$connect->query($sql);
                    $final=$resaul->fetch_assoc();


                   
                    ?>
                    <h3>Name : <?php echo $final['name']?> </h3> <br><hr>
                    <h3>Price : <?php echo $final['price']?> </h3> <br><hr>
                    <h3>Description : <?php echo $final['description']?> </h3> <br><hr>
                    <img src="../uploads/<?php echo $final['picture']?>" style="width: 300px;" alt="No File">
                    
                    <!-- left column -->
                    

                    <div class="col-md-3">

                    </div>
                </div>


            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <?php
  include ("adminpartials/footer.php");
  ?>
</body>

</html>