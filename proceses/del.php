<?php 
if(isset($_GET['id'])){
$id = $_GET['id'];

session_start();
include('dbconfig.php');

$query = "delete FROM files WHERE id='$id'";

$result = mysqli_query($conn,$query);

header('location:../profile.php');

}

?>