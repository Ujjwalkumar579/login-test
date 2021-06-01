<?php
    session_start();
    if(isset($_SESSION['username']))
    {
        header('Location: dashboard.php');
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <link href="./bootstrap-5.0.0-beta1-dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="./fontawesome-free-5.15.2-web/fontawesome-free-5.15.2-web/css/all.min.css" rel="stylesheet">
        <link href="./Styles.css" rel="stylesheet">

    </head>
    <body>

    <?php

        $conn = mysqli_connect("localhost","root","","mydata");
            if(isset($_POST['submit']))
            {
                $username = $_POST['username'];
                $password = $_POST['password'];
                $sql = "SELECT * from login_data WHERE BINARY username='$username' and BINARY upassword='$password'";
                $result = mysqli_query($conn,$sql);
                $row = mysqli_num_rows($result);
                    if($row==1)
                    {
                        $_SESSION['username']=$username;
                        header('Location: dashboard.php');
                    }
                    else
                        {
                        echo "Invalid Username or Password!";
                        }

                
            }

        ?>
        
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 bg">
                    <div class="center_login">
                       <div class="container">
                           <div class="row p-5 rounded">
                               <div class="col-12">
                                   <h2 class="text-center">LOGIN</h2>
                               </div>

                               <div class="col-12">
                                   <div class="profile text-center p-3">
                                    <i class="fas fa-user-alt fa-4x"></i>
                                   </div>
                               </div>

                               <div class="col-12">
                                   
                                  <form action="" method="POST">    
                                                <div class="form-floating"> 
                                                        <input type="text" name="username" placeholder="Username" class="form-control" height="30" autocomplete="off">
                                                        <label class="floatingInput">Username</label>
                                                    </div>

                                                    <div class="form-floating mt-3"> 
                                                        <input type="password" name="password" placeholder="Password" class="form-control" height="30">
                                                        <label class="floatingPassword">Password</label>
                                                    </div>


                                                    <div class="form-check pt-3">
                                                        <label class="form-check-label">
                                                        <input class="form-check-input" type="checkbox" value="">
                                                        Remember me
                                                        </label>
                                                        <a class="text-end p-5" href="passchange.php" style="text-decoration:none">Forgot Password</a>
                                                    </div>

                                                    


                                                    <input type="submit" class="btn btn-outline-danger form-control mt-4" name="submit" value="submit"></input>
                                        </form>
                                        <div class="link pt-3 align-content-center offset-5">
                                            <a  href="register.php"  class="btn btn-outline-success" value="Sign-Up" name="signup"> Sign-Up </a>
                                        </div>
                                        
                                    </div>
                           </div>
                       </div>
                    </div>
                </div>
            </div>
        </div>



        <?php

        ?>
        <script src="./bootstrap-5.0.0-beta1-dist/js/bootstrap.min.js"> </script>
    </body>
</html>