<?php
$conn = new mysqli("localhost","root","");
if(!$conn){
    die("Unable to connect ".mysqli_connect_error());
}
else{
    echo "Connected Successfully !";
}



?>