<?php 
    include 'config.php';
    session_start();
    if(isset($_SESSION["username"])){
        header("Location: post.php");
    };
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
            <div class="container mt-3 pt-5">
                <div class="row mt-5">
                    <div class="offset-md-4 col-md-4 mt-3 bg-dark p-5 text-light">
                        <img class="logo mb-4" src="images/logo.png" style="height:80px;width:250px;">
                      
                        <!-- Form Start -->
                        <form  action="<?php $_SERVER['PHP_SELF']; ?>" method ="POST" autocomplete = "off">
                            <div class="form-group">
                                <label>Username</label>
                                <input type="text" name="username" class="form-control" placeholder="" required>
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="password" class="form-control" placeholder="" required>
                            </div>
                            <input type="submit" name="login" class="btn btn-primary" value="login" />
                        </form> <br>
                        <!-- /Form  End -->

                        <?php 
                            if(isset($_POST['login'])){
                                include 'config.php';
                                $username = mysqli_real_escape_string($conn,$_POST['username']);
                                $password = mysqli_real_escape_string($conn,$_POST['password']);
                                $sql = "SELECT user_id, username, role FROM user WHERE username = '{$username}' AND password = '{$password}'" or die("wrong query");

                                $result = mysqli_query($conn, $sql);
                                if(mysqli_num_rows($result)){
                                    $row = mysqli_fetch_assoc($result);
                                        $_SESSION["username"]  = $row['username'];
                                        $_SESSION["user_id"]  = $row['user_id'];
                                        $_SESSION["user_role"]  = $row['role'];

                                        header("Location:add-post.php");
                                    

                                }else{
                                    echo '<div class="alert alert-danger">Username and Password are not match</div>';
                                };
                        
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
