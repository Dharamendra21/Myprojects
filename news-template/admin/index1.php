<!-- <?php
    session_start();
    require "config.php";
    if ($_SERVER["REQUEST_METHOD"]=="POST") {
        $username =$_POST["username"];
        $password =$_POST["password"];

        $query = "SELECT `user_id`, `username`, `role` FROM `user` WHERE `username`='{$username}' AND `password`='{$password}'";
        if ($res = mysqli_query($conn,$query)) {
            $data =mysqli_fetch_assoc($res);
            print_r($data);
            // die();
           if ($data['role']==1) {
            $_SESSION["admin_id"]= $data['user_id'];
            $_SESSION["admin_username"]= $data['username'];            
            header("location:add-user.php");
           }else{
            $_SESSION["id"]=$data['user_id'];
            $_SESSION["username"]= $data['username'];           
            header("location:add-post.php");
           }        
        //    if ($_SESSION["admin_username"]!= $data['user_username']) {
        //     header("location:index.php");
           
        //    } 

        }else{
            echo "username and password not matched";
        }       
        
    }


?> 

<?php
    include 'config.php';
    // session_start();
    if (isset($_SESSION["username"])) {
        header("location:index.php");
    }

?>


<!doctype html>
<html>
   <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>ADMIN | Login</title>
        <link rel="stylesheet" href="../css/bootstrap.min.css" />
        <link rel="stylesheet" href="font/font-awesome-4.7.0/css/font-awesome.css">
        <link rel="stylesheet" href="../css/style.css">
    </head>

    <body>
        <div id="wrapper-admin" class="body-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-offset-4 col-md-4">
                        <img class="logo" src="images/news.jpg">
                        <h3 class="heading">Admin</h3>
                        <!-- Form Start -->
                       
                        <form  action="" method ="POST">
                            <div class="form-group">
                                <label>Username</label>
                                <input type="text" name="username" class="form-control" placeholder="" required>
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="password" class="form-control" placeholder="" required>
                            </div>
                            <input type="submit" name="login" class="btn btn-primary" value="login" />
                        </form>
                        
                        <!-- /Form  End -->
                    </div>
                </div>
            </div>
        </div>
    </body>
</html> -->
