<?php
if(!$_POST)
die();
session_start();

require "connection.php";

$fname = $_POST['reg_fname'];
$lname = $_POST['reg_lname'];
$email = $_POST['reg_email'];
$password1 = md5($_POST['reg_password1']);
$password2 = md5($_POST['reg_password2']);
$phonenumber = $_POST['reg_phonenumber'];
$_SESSION['errors'] = array();
$_SESSION['reg_fname'] = $fname;
$_SESSION['reg_lname'] = $lname;
$_SESSION['reg_email'] = $email;
$_SESSION['reg_phonenumber'] = $phonenumber;





if(preg_match('/[^A-Za-z]/', $fname)){
    $_SESSION['errors'] [] = ' Sorry, invalid Name <br />';
header("location: register.php");
}

if(preg_match('/[^A-Za-z]/', $lname)){
        $_SESSION['errors'] [] = ' Sorry, invalid Name <br />';
    header("location: register.php");
    }

if(preg_match('/@[^A-Za-z0-9]@/', $password1)){
        $_SESSION['errors'] [] = ' Sorry, passwords must contain only english characters <br />';
    header("location: register.php");
    }

if($password1 != $password2){
    $_SESSION['errors'][] = "Passwords don't match <br />";
    header('location: register.php');
}

if(strlen($password1) <= 7 && strlen($password2) <= 7){
    $_SESSION['errors'] [] = 'Sorry, password must be more than 7 characters and contain an uppercase letter <br />';
    header('location: register.php');
}

$sql = "SELECT * FROM users WHERE email='$email'";

$result = $conn->query($sql);
$user = $result->fetch(PDO::FETCH_ASSOC);

if($user['email'] === $email){
    $_SESSION['errors'] [] = "Another user already has that email, try registering with another <br />";
    header('location: register.php');
}

if(empty($_SESSION['errors'])){
    include "insert.php";
    $_SESSION['success']  = "You have successfully Registered";
    header('location: register.php');  

    $_SESSION['reg_fname'] = "";
    $_SESSION['reg_lname'] = "";
    $_SESSION['reg_email'] = "";
    $_SESSION['reg_phonenumber'] = "";
}

// include('insert.php');

?>