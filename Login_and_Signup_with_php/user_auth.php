<?php
// first we will create user database separetely // done
// then we will create user table
$conn = new mysqli("localhost","root","");
if(!$conn){
    die("Unable to connect ".mysqli_connect_error());
}
else{
    echo "Connected Successfully !";
}
use user_auth;
// creating user_auth database
// $sql = "create database if not exists user_auth";
// // connected successfully but query not run
// if($conn->query($sql)===TRUE){
//     echo "Database created successfully";
// }
// else{
//     echo "Error while creating database";
// }

//creating user table
// $sql = "create table users 'user_auth   '@' localhost'    "


?>