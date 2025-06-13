<?php
$conn = new mysqli("localhost" , "user_auth","user_auth","user_auth");
// if(!$conn){
//     die("Unable to connect ".mysqli_connect_error());
// }
// else{
//     echo "Connected Successfully !";
// }

// $sql ="create table if not exists users(id int auto_increment primary key, username varchar(44) unique not null, email varchar(66) unique not null , password varchar(77) not null) ";

// if($conn->query($sql)===TRUE){
//     die("Table Users created");
// }
// else{
//     echo " Unsuccessful while creation of table users !";
// }

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirm = $_POST['confirm_password'];

if($password !== $confirm){
    die("check your password because it does not look same !");


}
// else{
    // echo "Connected Successfully !";
    // for security reasons we will use bcry way to slow down hackers to crack users password 
    $hashed = password_hash($password,PASSWORD_DEFAULT);
    // we will avoid else for many tasks

// }

$stmt = $conn->prepare("select * from users where username = ? OR email = ?");
$stmt->bind_param("ss", $username,$email);
$stmt->execute();
$result = $stmt->get_result();
if($result->num_rows>0){
    die("user name or email aleady exists !");
}
// insertion of new user 
$stmt = $conn->prepare("insert into users (username,email,password) values(?,?,?) ");
$stmt->bind_param("sss",$username,$email,$hashed);
$stmt->execute();
echo "signup successfully ! <br> <a href='login.html'>Login Here </a>";
//here it will done



$conn->close();
?>