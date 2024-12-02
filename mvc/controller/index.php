<?php
if(!isset($_POST['username']) && !isset($_POST['password'] ))
{
    header('../../index.php');
    exit();
}

$username = $_POST['username'];
$password = $_POST['password'];
require('../../database/config.php');
require('../../database/connectDB.php');

$conn = connectDB($host, $username, $password, $dbname, $port);

// echo $_POST['username'].'----- '.$_POST['password'].'/';

$sql="SELECT * FROM users WHERE user_name= '$username'";
$result = mysqli_query($conn, $sql);
if($result && mysqli_num_rows($result)> 0){
    $row = mysqli_fetch_array($result);
    $temp_password = $row['password_user'];
    if(password_verify($password, $temp_password)) {
        session_start();
        $_SESSION['username'] = $row['name'];
        $_SESSION['rol'] = $row['id_rol'];
        if($row['id_rol']== "1") header('../view/admin/homeAdmin.php'); exit;
        if($row['id_rol']== "2") header('../view/employee/homeEmployee.php'); exit;
        if($row['id_rol']== "3") header('../../home/home.php'); exit;
    }
    else{
        header('../../index.php?error=1');
        mysqli_close($conn);
    } 
}
else {
    header('../../index.php?error=1');
    mysqli_close($conn);
}
    