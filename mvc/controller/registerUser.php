<?php
    include './codeSecurity.php';
    include '../../database/config.php';
    include '../../database/connectDB.php';
    
    $conn = connectDB();
    // function isEmpty($value): bool{
    //     if(!empty($value)) return false;
    //     return true;
    // }
    
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        if(!$_POST){
            echo "<script>window.location ='../../register.php';</script>";
            exit;

        } else{
            $name = $_POST['name']; $lastname = $_POST['lastname']; $username = $_POST['username']; $password = $_POST['password']; $phone = $_POST['phone']; $sex = $_POST['sex'];

            echo '<br>' . $name, $lastname, $username, $password, $phone, $sex;

        }
    }
    if(isset($_POST["submit"])) echo '<br> validado segundo if' ;



