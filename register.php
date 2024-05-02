<?php
include 'dbcon.php';
$alert = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $age = $_POST['age'];
  $bldgrp = $_POST['blood_grp'];
  $mobile = $_POST['mobile-no'];
  $gender = $_POST['gender'];
  $address = $_POST['address'];
  $sql = "SELECT * FROM `users` WHERE `user_email`='$email'";
  $result = mysqli_query($con, $sql);
  if (mysqli_num_rows($result) == 0) {
    $sql = "INSERT INTO `users` (`user_email`,`user_pass`) VALUES ('$email','$password')";
    $result = mysqli_query($con, $sql);
    $sql = "INSERT INTO `donors` (`donor_email`, `first_name`, `last_name`, `age`, `gender`, `blood_grp`, `mobile_no`, `address`, `donor_status`) VALUES ('$email', '$fname', '$lname', '$age', '$gender', '$bldgrp', '$mobile', '$address', '1')";
    mysqli_query($con,$sql);
    session_start();
    $_SESSION['logedin'] = true;
    $_SESSION['email']=$email;
    echo "<script type='text/javascript'>window.top.location='http://localhost/Blood%20Donation/';</script>";
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <link rel="shortcut icon" href="blood.png" type="image/x-icon">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login</title>
  <!-- <link rel="stylesheet" href="css/login.css" /> -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap"
    rel="stylesheet" />
  <style>
    :root {
      --black: #31393cff;
      --blue: #2176ffff;
    }

    * {
      margin: 0;
      font-family: "Poppins", sans-serif;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      /* background: url("images/image1.jpg"); */
      background-repeat: no-repeat;
      background-size: cover;
    }

    .container {
      width: 100vw;
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .form-input {
      align-self: center;
      padding: 6px;
      width: 26rem;
    }

    input {
      padding: 12px;
      width: 100%;
      border-radius: 8px;
      font-size: 1rem;
      border: 1px solid var(--black);
      margin-bottom: 6px;
    }

    label {
      color: var(--black);
      font-weight: 600;
    }

    button {
      padding: 15px;
      width: 100%;
      border-radius: 8px;
      margin-top: 0.9rem;
      background-color: var(--blue);
      border: 0px;
      font-size: 1rem;
      color: white;
      font-weight: 600;
      cursor: pointer;
    }

    select {
      padding: 12px;
      font-size: 1rem;
      border-radius: 10px;
      width: 12rem;
    }

    .grp {
      display: flex;
      justify-content: space-between;
      gap: 1rem;
    }

    .alert {
      font-size: 1rem;
      color: lightcoral;
    }
  </style>
</head>

<body>
  <div class="container">
    <div class="form-input">
      <h1>Register Now</h1>
      <form action="register.php" method="POST">
        <div class="grp">
          <div class="grp5">
            <label for="fname">First Name</label><br />
            <input type="text" name="fname" required /><br />
          </div>
          <div class="grp6">
            <label for="lname">Last Name</label><br />
            <input type="text" name="lname" /><br />
          </div>
        </div>
        <label for="email">Email</label><br />
        <input type="email" name="email" required /><br />
        <label for="email">Password</label><br />
        <input type="password" name="password" required /><br />
        <div class="grp">
          <div class="grp3">
            <label for="age">Age</label><br />
            <input type="number" name="age" required /><br />
          </div>
          <div class="grp4">
            <label for="mobile-no">Mobile No</label><br />
            <input type="number" maxlength="10" name="mobile-no" required /><br />
          </div>
        </div>
        <div class="grp">
          <div class="grp2">
            <label for="gender">Gender</label><br />
            <select name="gender" id="">
              <option value="male">Male</option>
              <option value="female">Female</option>
              <option value="other">other</option>
            </select><br />
          </div>
          <div class="grp1">
            <label for="fname">Blood Group</label><br />
            <select name="blood_grp" id="">
              <option value="A-">A-</option>
              <option value="A+">A+</option>
              <option value="B-">B-</option>
              <option value="B+">B+</option>
            </select><br />
          </div>
        </div>
        <label for="address">Address</label><br />
        <input type="text" name="address" required /><br />
        <p class="alert"><?php if (isset($alert)) {
          echo $alert;
        } ?></p>
        <button type="submit">Register</button>
      </form>
      <a href="login.php">Already have account? Login Now</a>
    </div>
  </div>
</body>

</html>