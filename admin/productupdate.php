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
                    $newid=$_GET['pro_up'];
                    $sql="SELECT * FROM products WHERE id='$newid'";
                    $result=$connect->query($sql);
                    $final=$result->fetch_assoc();

                    ?>
                    <!-- left column -->
                    <div class="col-md-6">
                        <form role="form" action="proupdate.php" method="POST" enctype="multipart/form-data">
                            <div class="box-body">
                            
                
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" id="name" placeholder="Enter Product name"
                                        name="name" value="<?php echo $final['name']?>">
                                </div>
                                <div class="form-group">
                                    <label for="price">Price</label>
                                    <input type="text" class="form-control" id="price" placeholder="Price" name="price"
                                        value="<?php echo $final['price']?>">
                                </div>
                                <div class="form-group">
                                    <label>File input</label>
                                    <br>
                                    
                                    <img src="../uploads/<?php echo $final['picture']?>" style="width: 300px;" alt="No File" >
                                    <input type="file" name="file" value="<?php echo $final['picture']?>">
                                    
                                </div>

                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <?php echo $final['description']?>
                                    <textarea rows="10" class="form-control"
                                        name="description"><?php echo $final['description']?>
                                        </textarea>
                                </div>
                                <div class="form-group">
                                   <?php
                                    include ("../partials/connect.php");
                                    $sql="SELECT *FROM categories";
                                    $result=$connect->query($sql);
                                    ?>
                                    <label for="category">Category</label>
                                    <select id="category" name="category">
                                    <?php

                                    while($row=$result->fetch_object()){
                                        echo "<option value=".$row->id.">".$row->cat_name."</option>";
                                    
                                    }
                                    
                                    ?>
                                       
                                    </select>
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