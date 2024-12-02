<?php
    require '../../database/config.php';
    require '../../database/connectDB.php';

    if(empty($_POST['username']) || empty($_POST['password']))
    {
        echo "<script>window.location ='../../index.php';</script>";
        exit();
    }

    $username_1 = $_POST['username'];
    $password_1 = $_POST['password'];
    $conn = connectDB();

    // echo $_POST['username'].'----- '.$_POST['password'].'/';

    $sql="SELECT * FROM `users` WHERE user_name= '$username_1'";
    $result = mysqli_query($conn, $sql);

    // condicion para tomar datos de los usuarios y redigir a las vistas dependiendo el rol
    if($result && mysqli_num_rows($result)> 0){
        $row = mysqli_fetch_array($result);
        $temp_password = $row['password_user'];
        // echo $temp_password;
        if(password_verify($password_1, $temp_password))
        {
            session_start();
            $_SESSION['username'] = $row['name'];
            $_SESSION['rol'] = $row['id_rol'];
            
            if($row['id_rol']== '1'){
                echo "<script>window.location ='../view/admin/homeAdmin.php';</script>";
                exit;
            }
            if($row['id_rol']== '2'){
                echo "<script>window.location ='../view/employee/homeEmployee.php';</script>";
                exit;
            } 
            if($row['id_rol']== '3'){
                echo "<script>window.location ='../../home/home.php';</script>";
                exit;
            } 
        }
        else{
            echo "<script>window.location ='../../index.php?error=1';</script>";
            mysqli_close($conn);
        } 
    }
    else {
        echo "<script>window.location ='../../index.php?error=1';</script>";
        mysqli_close($conn);
    }
        