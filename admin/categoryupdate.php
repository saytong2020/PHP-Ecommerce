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
                    <div class="col-md-3">

                    </div>
                    <?php
                     include ("../partials/connect.php");
                    $newid=$_GET['cat_up'];
                    $sql="SELECT * FROM categories WHERE id='$newid'";
                    $result=$connect->query($sql);
                    $final=$result->fetch_assoc();

                    ?>
                    <!-- left column -->
                    <div class="col-md-6">
                        <form role="form" action="catupdate.php" method="POST">
                            <div class="box-body">
                            
                
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" id="name" placeholder="Enter Product name"
                                        name="name" value="<?php echo $final['cat_name']?>">
                                </div>
                                
                                       
                                

                            </div>
                            <!-- /.box-body -->
                           
                            <div class="box-footer"> 
                       
                                <input type="hidden" value="<?php echo $final['id']?>" name="form_id">
                                <button type="submit" class="btn btn-warning" name="update">Update</button>
                            </div>
                        </form>
                    </div>

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