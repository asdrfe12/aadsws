<?php

include('dbconfig.php');

session_start();
$email = $_POST['email'];
$password = $_POST['password'];
$name = $_POST['name'];



$query = "SELECT * FROM users WHERE (email='$email')";

$result = mysqli_query($conn,$query);
$row = mysqli_fetch_array($result);
$num_row = mysqli_num_rows($result);

if( $num_row > 0 ) {
    
    header('location:../signUp.php?error=1');
    
}elseif($num_row == 0){

    $query = "insert into users (email, name, password ) values('$email','$name','$password') ";
    $run = mysqli_query($conn,$query);

    $_SESSION['id'] = $row['id'];
    $_SESSION['email'] = $row['email'];
    $_SESSION['name'] = $row['name'];

    header('location:../index.php?success=1');
}

?>