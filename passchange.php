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
       if(isset($_POST['submit']))
        {
            $conn = mysqli_connect("localhost","root","","mydata");
            $usname = $_POST['uname'];  
            $uspass = $_POST['upass'];  
            $repass = $_POST['repass'];  

            if($uspass == $repass)
            {
                $sql = "UPDATE login_data SET username='$usname',upassword='$repass' WHERE username='$usname'";
                $result= mysqli_query($conn,$sql);
               
                //header('location:register.php');
                if($result)
                {
                    echo  "<div class='alert alert-success' role='alert'>
                    Password Changed
                </div>";
                }
                else
                {
                    echo  "<div class='alert alert-warning' role='alert'>
                   Server Busy
                </div>";
                }
            }
            else
            {
                echo  "<div class='alert alert-danger' role='alert'>
                    Password Unmatched
                </div>";
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
                                   <h2 class="text-center">Change Password</h2>
                               </div>

                               <div class="col-12">
                                   <div class="profile text-center p-3">
                                    <i class="fas fa-user-alt fa-4x"></i>
                                   </div>
                               </div>

                               <div class="col-12">
                                   
                                  <form action="" method="POST">    
                                                <div class="form-floating"> 
                                                        <input type="text" name="uname" placeholder="Username" class="form-control" height="10" autocomplete="off">
                                                        <label class="floatingInput">Username</label>
                                                    </div>

                                                    <div class="form-floating mt-3"> 
                                                        <input type="password" name="upass" placeholder="Password" class="form-control" height="30">
                                                        <label class="floatingPassword">Password</label>
                                                    </div>

                                                    <div class="form-floating mt-3"> 
                                                        <input type="password" name="repass" placeholder="Re-enter Password" class="form-control" height="30">
                                                        <label class="floatingPassword">Re-enter Password</label>
                                                    </div>


                                                    


                                                    <input type="submit" class="btn btn-outline-danger form-control mt-4" name="submit" value="submit"></input> <br> <br>
                                                        <a class="btn btn-outline-dark offset-5" href="./login.php" type="button">Log In</a>
                                        </form>
                                        
                                    </div>
                           </div>
                       </div>
                    </div>
                </div>
            </div>
        </div>







  <!--  <form action="" method="POST" class="p-5">
        <input type="text" value="" name="uname"> <br> <br>
        <input type="password" value="" name="upass"> <br> <br>
        <input type="password" value="" name="repass"> <br> <br>
        <input type="submit" value="submit" name="submit"> <br> <br>
    </form>    -->
</body>