<?php
session_start();
if(!isset($_SESSION['username'])){
    header("location:login.html");
    exit();
}


// after this end and will show the following:
?>

<h2>Welcome ,<?php echo $_SESSION['username']?>!</h2>
<a href="logout.php">Logout</a>
