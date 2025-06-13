<?php
// first we will create user database separetely // done
// then we will create user table
$conn = new mysqli("localhost","user_auth","user_auth");
if(!$conn){
    die("Unable to connect ".mysqli_connect_error());
}
else{
    echo "Connected Successfully !";
}
// use user_auth;
// creating user_auth database
// $sql = "create database if not exists user_auth";
// // connected successfully but query not run
// if($conn->query($sql)===TRUE){
//     echo "Database created successfully";
// }
// else{
//     echo "Error while creating database";
// }

// creating user
// $sql = "create user if not exists 'user_auth'@'localhost' identified by 'user_auth' ";
// if($conn->query($sql)===TRUE){
//     echo "user created !";
// }
// user create by name of user_auth

// granting privileges for user_auth

$sql = "grant all privileges on user_auth.* to 'user_auth'@'localhost' ";
 if($conn->query($sql)===TRUE){
    echo "Granting Privileges successfully!";
}

$conn->query("flush privileges");


?>