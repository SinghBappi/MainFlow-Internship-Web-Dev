<?php

session_start();
$conn = new mysqli("localhost" , "user_auth","user_auth","user_auth");
if($conn->connect_error){
    die ("connection failed". $conn->connect_error);

}else{
    echo "Connection was successfull!";
}

$user = $_POST['username_or_email'];
$pass = $_POST['password'];
$stmt = $conn->prepare("select * from users where username = ? or email = ?");
$stmt->bind_param("ss",$user,$user);
$stmt->execute();
$result = $stmt->get_result();
if($result->num_rows===1){
    $row = $result->fetch_assoc();
    if(password_verify($pass,$row['password'])){
        $_SESSION['username'] = $row['username'];
        header("location:dashboard.php");
        // we will create after wards
    }
    else {
        echo "Incorrect password !";
    }

}
else{
    echo "user not found !";
}


?>