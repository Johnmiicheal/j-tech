<?php
ob_start();
require 'connection.php';
include 'reg_backend.php';

$email = $_POST['email'];
$password = $_POST['password'];
$_SESSION['login_errors'] = array();


$sql  = "SELECT * FROM users WHERE email = '$email' AND password1 = '$password'";

$result = $conn->query($sql);
$user = $result->fetch(PDO::FETCH_ASSOC);
$check = $user['email'] = $email && $user['password1'] = $password;

if($check){
    // $row = mysqli_fetch_array($result);
    // $_SESSION['email'] = $user['email'];
    

    header('location: userpage.php');
   
    exit();
}else{
    $_SESSION['login_errors'] [] = "Email or password was incorrect";
    header('location: login.php');
}



?>