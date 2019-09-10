<?php

$sql = "INSERT INTO users (firstname, lastname, email, phonenumber, password1) VALUES ('$fname', '$lname', '$email', '$phonenumber', '$password1')";

$done = $conn->exec($sql);

// if($conn->query($sql) === TRUE){
//     echo "Table Created Successfully";
// }else{
//     echo "Error creating database". $conn->error;
// }

header('location: register.php');
?>