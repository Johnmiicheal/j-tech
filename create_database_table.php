<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "jtech";

$conn = new mysqli ($servername, $username, $password, $dbname);

if($conn->connect_error){
    die("database error :". $conn->connect_error);
}

$sql = "CREATE TABLE users(
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50) ,
    phonenumber VARCHAR(50),
    password1 VARCHAR(50),
    password2 VARCHAR(50),
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";


if($conn->query($sql) === TRUE){
    echo "Table Created Successfully";
}else{
    echo "Error creating database". $conn->error;
}
?>