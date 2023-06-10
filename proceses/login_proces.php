<?php

include('dbconfig.php');

session_start();
$email = $_POST['email'];
$password = $_POST['password'];
$query = "SELECT * FROM users WHERE (email='$email' AND password='$password')";

$result = mysqli_query($conn,$query);
$row = mysqli_fetch_array($result);
$num_row = mysqli_num_rows($result);

if( $num_row > 0 ) {
    $_SESSION['id'] = $row['id'];
    $_SESSION['email'] = $row['email'];
    $_SESSION['name'] = $row['name'];
    header('location:../index.php');
 
}else{
    header('location:../login.php?error=0');
}
?>