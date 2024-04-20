<?php
include 'random.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  include 'dbcon.php';
  $ranDonor_id=randomUserId(6);
  $user = $_POST['username'];
  $user_pass = $_POST['password'];
  include 'dbcon.php';
  $sql = "INSERT INTO `users` (`username`,`password`,`donor_id`) VALUES ('$user','$user_pass')";
  // header('location : index.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
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
      padding: 30px;
      width: 24rem;
    }

    input {
      padding: 15px;
      width: 100%;
      border-radius: 8px;
      font-size: 1rem;
      border: 1px solid var(--black);
      margin-bottom: 6px;
    }

    label {
      color: var(--black);
      font-weight: 400;
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
  </style>
</head>

<body>
  <div class="container">
    <div class="form-input">
      <h1>Login</h1>
      <form action="login.php" method="POST">
        <label for="name">Username</label><br />
        <input type="text" name="username" required /><br />
        <label for="password">Password</label> <br />
        <input type="password" required name="pass" id="" /><br />
        <button type="submit">Login</button>
      </form>
      <a href="register.php">Don't have account? Register Now</a>
    </div>
    
  </div>
</body>

</html>