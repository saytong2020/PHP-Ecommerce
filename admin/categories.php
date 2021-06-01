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
                <form role="form" action="cathandler.php" method="post">
                  
                    <div class="col-sm-3">

                    </div>
                    <div class="col-sm-6">
                      <h1>Categories</h1>
                        <div class="box-body">
                            <div class="form-group">
                                <label for="category">Categories</label>
                                <input type="text" class="form-control" id="name" placeholder="Enter categories"
                                    name="name">
                            </div>


                            <!-- /.box-body -->

                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">

                    </div>

                </form>



            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <?php
  include ("adminpartials/footer.php");
  ?>
</body>

</html>