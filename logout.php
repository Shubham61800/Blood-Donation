<?php
session_start();
session_unset();
session_destroy();
echo "<script type='text/javascript'>window.top.location='http://localhost/Blood%20Donation/login.php';</script>";
?>