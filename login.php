<?php
include 'dbcon.php';
$user = $_POST['username'];
$user_pass = $_POST['pass'];
$sql = "INSERT INTO `user` (`username`,`password`) VALUES ('$user','$user_pass')";
mysqli_query($con, $sql);
$sql = "SELECT * FROM `user`";
echo mysqli_query($con, $sql);
?>