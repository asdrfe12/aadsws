<?php

include('dbconfig.php');

session_start();
$month = "";
$week = "";
if(isset($_POST['month']))
$month = $_POST['month'];
if(isset($_POST['week']))
$week = $_POST['week'];

$filename = $_FILES['file']['name'];
$tempname = $_FILES['file']['tmp_name'];
$folder = "../upload/" . $filename;

$userId = $_SESSION['id'];

if (move_uploaded_file($tempname, $folder)) {
    $query = "insert into files (userId, file , month , week) values('$userId','$filename' , '$month' , '$week')";
    $run = mysqli_query($conn, $query);

    $command = escapeshellcmd("python loadfile.py --userId " . $userId);
    $python = shell_exec($command);
    
    header('Location: ../Result.php');
}

?>
