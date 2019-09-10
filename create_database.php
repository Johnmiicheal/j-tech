<?php

$servername = "localhost";
$username = "root";
$password = "";

$conn = new mysqli ($servername, $username, $password);

if($conn->connect_error){
    die("database error" . $conn->connect_error);
}

$sql = "CREATE DATABASE jtech";

if($conn->query($sql) === TRUE){
    echo "Database created Successfully";
}else{
    echo "Error in creating Database ". $conn->error;
}

?>