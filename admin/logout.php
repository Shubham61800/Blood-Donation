<?php
session_start();
unset($_SESSION['$admin_logedin']);
echo "<script type='text/javascript'>window.top.location='http://localhost/Blood%20Donation/admin/login.php';</script>";
?>