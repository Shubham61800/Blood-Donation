<?php
$host = "localhost";
$username = "root";
$pass = "";
$database = "blood donation";
$con = mysqli_connect($host, $username, $pass, $database);
if (!$con) {
    echo "db connection error" . mysqli_connect_error();
}
?>