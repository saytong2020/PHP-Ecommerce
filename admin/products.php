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
                    <!-- left column -->
                    <div class="col-md-6">
                        <form role="form" action="producthandler.php" method="POST" enctype="multipart/form-data">
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" id="name" placeholder="Enter Product name"
                                        name="name">
                                </div>
                                <div class="form-group">
                                    <label for="price">Price</label>
                                    <input type="text" class="form-control" id="price" placeholder="Price" name="price">
                                </div>
                                <div class="form-group">
                                    <label>File input</label>
                                    <input type="file" name="file">
                                </div>

                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <textarea id="description" rows="10" class="form-control"
                                        placeholder="Enter Description" name="description"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="category">Category</label>
                                    <select id="category" name="category" class="form-control">
                                    <option>Select Category</option>    
                                    <?php
                                    include ("../partials/connect.php");
                                    
                                    $sql="SELECT *FROM categories";
                                    $result=$connect->query($sql);

                                    while($row=$result->fetch_object()){
                                        echo "<option value=".$row->id.">".$row->cat_name."</option>";
                                    }
                                    
                                    ?>
                                  
                                    </select>
                                </div>

                            </div>
                            <!-- /.box-body -->

                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary" name="btnSave">Submit</button>
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