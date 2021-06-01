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
                    <a href="products.php">
                            <button class="btn btn-primary">Add New</button>
                            </a>
                        <?php
                    include ('adminpartials/connect.php');
                    $sql="SELECT * FROM categories INNER JOIN products ON categories.id = products.category_id";
                    $resaul=$connect->query($sql);
                    
                    while($final=$resaul->fetch_assoc()){ ?>
                        <a href="proshow.php?pro_id=<?php echo $final['id']?>">
                            <h4><?php echo $final['id']?>: <?php echo $final['name']?></h4>
                            <h5><?php echo $final['cat_name']?></h5>
                        </a>
                        <a href="productupdate.php?pro_up=<?php echo $final['id']?>"><button>Update</button></a>
                        <a href="productdelete.php?pro_del=<?php echo $final['id']?>"><button>Delete</button></a>
                        <hr>
                        <?php
                    }

                    ?>
                    </div>

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