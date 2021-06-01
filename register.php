<?php
    session_start();
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
        error_reporting(0);
        if(isset($_POST['submit']))
        {  
             
            $name= $_POST['name'];
            $username = $_POST['username'];
            $password = $_POST['cpassword'];
            $sql1 = "SELECT * FROM login_data WHERE username='$username'";
            $result1 = mysqli_query($conn,$sql1);
            
                if(mysqli_fetch_assoc($result1)['username'] == $username)
                    {
                        echo "Username already exist";
                    }
                else
                {
                    $sql = "INSERT INTO login_data (name,username,upassword) VALUES ('$name','$username', '$password')";
                    $result = mysqli_query($conn,$sql);  
                    echo "account created";
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
                                   <h2 class="text-center">REGISTER</h2>
                               </div>

                               <div class="col-12">
                                   <div class="profile text-center p-3">
                                    <i class="fas fa-user-alt fa-4x"></i>
                                   </div>
                               </div>

                               <div class="col-12">
                                   
                                  <form action="" method="POST">  
                                                    <div class="form-floating"> 
                                                        <input type="text" name="name" placeholder="Enter Name" value="<?php echo $name; ?>" class="form-control" height="30" autocomplete="off">
                                                        <label class="floatingInput">Enter Name</label>
                                                    </div>

                                                <div class="form-floating mt-3"> 
                                                        <input type="text" name="username" placeholder="Enter Username" value="<?php echo $username; ?>" class="form-control" height="30" autocomplete="off">
                                                        <label class="floatingInput">Enter Username</label>
                                                    </div>

                                                    <div class="form-floating mt-3"> 
                                                        <input type="password" name="cpassword" placeholder="Create Password" value="<?php echo $password; ?>" class="form-control" height="30">
                                                        <label class="floatingPassword">Create Password</label>
                                                    </div>


                                                    <div class="form-check pt-3">
                                                        <label class="form-check-label">
                                                        <input class="form-check-input" type="checkbox" value="">
                                                        Remember me
                                                        </label>
                                                    </div>


                                                    <input type="submit" class="btn btn-outline-danger form-control mt-4" name="submit" value="submit"></input>

                                                        <a class="btn btn-outline-success mt-3 offset-5" href="login.php" name="login" value="login">LOGIN</a>
                                        </form>
                                        
                                        
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