
<?php
session_start();
include ('adminpartials/head.php');
include ('../partials/connect.php');
if(isset($_POST['login'])){

    $email=$_POST['email'];
    $password=$_POST['password'];
    $usertype=$_POST['usertype'];
    $sql="SELECT * FROM admins WHERE username='$email' AND password='$password' AND usertype='$usertype' ";
    
    $connect->query($sql);
    $result = $connect->query($sql);

    $final=$result->fetch_assoc();

$_SESSION['email']=$final['username'];
$_SESSION['password']=$final['password'];

    if($email=$final['username'] AND $password=$final['password']){
        header ('location: adminindex.php');
    }
    else if($email=$final['username'] AND $password=$final['password'] AND $final['usertype']=0){
        header ('location: categories.php');
    }else{
        header ('location: adminlogin.php');
    }


    

}


?>

<div class="row">

    <div class="col-sm-3"></div>
    <div class="col-sm-6">
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Admin Login</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="adminlogin.php" method="POST">
                <div class="box-body">
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Email</label>

                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="inputEmail3" placeholder="Email" name="email">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-2 control-label">Password</label>

                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="inputPassword3" placeholder="Password"
                                name="password">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-2 control-label">type</label>
                        <select name="usertype" >
                        <option value="0">Staff</option>
                        <option value="1">Admin</option>
                        </select>

                    </div>
                    
                </div>
                <!-- /.box-body -->
                <div class="box-footer">

                    <button type="submit" class="btn btn-info pull-right" name="login">Login </button>
                </div>
                <!-- /.box-footer -->
            </form>
        </div>

    </div>
    <div class="col-sm-3"></div>


</div>