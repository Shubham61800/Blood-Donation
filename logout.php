<?php
session_start();
unset($_SESSION['email']);
echo "<script type='text/javascript'>window.top.location='http://localhost/Blood%20Donation/login.php';</script>";
?>