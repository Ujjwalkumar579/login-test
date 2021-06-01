<?php
session_start();
if(!$_SESSION['username']){
    header('Location: login.php');
}
$e=$_SESSION['name'];
?>
<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    
    <h2>Login Success!</h2>

    <?php
    $conn=mysqli_connect("localhost", "root", "", "mydata");
    $sql="SELECT * FROM login_data WHERE name='$e'";
    $result=mysqli_query($conn, $sql);
    $row=mysqli_fetch_assoc($result);
    echo "Name: $row[username]";
    
    ?>

    <a href="logout.php">Logout</a>
    
</body>
</html>