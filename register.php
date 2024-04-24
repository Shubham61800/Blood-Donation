<?php
$alert = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $user = $_POST['username'];
  $user_pass = $_POST['pass'];
  $cpass = $_POST['cpass'];
  if ($user_pass == $cpass) {
    include 'dbcon.php';
    $sql = "INSERT INTO `users` (`username`,`password`) VALUES ('$user','$user_pass')";
    $result = mysqli_query($con, $sql);
    header('location : index.php');
    session_start();
    $_SESSION['username'] = $user;
  }
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
      padding: 6px;
      width: 24rem;
    }

    input {
      padding: 8px;
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
      padding: 8px;
      font-size: 1rem;
      border-radius: 10px;
      width: 11rem;
    }
    .grp{
      display: flex;
      justify-content: space-between;
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
        <label for="name">Full Name</label><br />
        <input type="text" name="name" required /><br />
        <label for="email">Email</label><br />
        <input type="email" name="email" required /><br />
        <label for="age">Age</label><br />
        <input type="number" name="age" required /><br />
        <div class="grp">
          <div class="grp2">
            <label for="gender">Gender</label><br />
            <select name="gender" id="">
              <option value="A-">Male</option>
              <option value="A+">Female</option>
              <option value="B-">Transgender</option>
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
        <label for="mobile-no">Mobile No</label><br />
        <input type="number" name="mobile-no" required /><br />
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