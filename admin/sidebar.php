<?php
include '../dbcon.php';
error_reporting(0);
session_start();
$admin_logedin=$_SESSION['admin_logedin'];
if (!$admin_logedin) {
    echo "<script type='text/javascript'>window.top.location='http://localhost/Blood%20Donation/admin/login.php';</script>";
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="blood.png" type="image/x-icon">
    <title>ADMIN PANEL</title>
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

        .list-request,.list-donor{
            margin: 2rem 0;
            display: grid;
            grid-template-columns: max-content auto auto auto auto max-content;
            column-gap: 0;
        }

        form {
            display: flex;
            gap: 1rem;
        }

        .filter {
            display: flex;
            gap: 1rem;
            align-items: center;
        }

        .list-donor p,
        .list-donor form {
            padding: 10px;
            border: 1px solid black;
            align-self: center;
            border-collapse: collapse;
            text-align: center;
            height: 65px;
        }

        button {
            padding: 10px 1.5rem;
            border-radius: 10px;
            border: none;
            font-size: 1rem;
        }

        .main-container {
            display: flex;
            width: 100%;
            gap: 6rem;
            overflow: hidden;
        }

        .center {
            display: flex;
            flex-direction: column;
            padding: 2rem 2rem;
            height: 100vh;
            overflow-y: scroll;
            width: 100%;
        }

        .sidebar {
            display: flex;
            flex-direction: column;
            padding: 4rem 3rem;
            gap: 3rem;
            height: 100vh;
            background-color: var(--blue);
            width: 18rem;
        }

        .dt {
            display: flex;
            gap: 1rem;
            width: max-content;
            color: white;
            align-items: center;
            padding: 1rem;
            background-color: var(--black);
            border-radius: 4px;
        }

        select {
            padding: 1rem;
            font-size: 1rem;
            border-radius: 1rem;
        }

        .sidebar a {
            color: white;
            text-decoration: none;
        }

        .accept {
            background-color: greenyellow;
            color: black;
        }

        .reject {
            background-color: lightcoral;
            color: white;
        }

        .filter {
            border: none;
        }

        .filter button {
            background-color: var(--blue);
            color: white;
            padding: 0.5rem 1rem;
        }
    </style>
</head>

<body>
    <div class="sidebar">
        <div class="dt"><i class="fa-regular fa-user"></i><?php echo $_SESSION['admin_name']; ?></div>
        <a href="dashboard.php">Dashboard</a>
        <a href="donor.php?blood_grp=all">Donors</a>
        <a href="request.php?req_status=1">Blood Request</a>
        <a href="camps.php">Manage Camps</a>
        <a href="logout.php">Logout<i class="fa-solid fa-right-from-bracket"></i></a>
    </div>
    <script src="https://kit.fontawesome.com/f9d8f2f036.js" crossorigin="anonymous"></script>
</body>

</html>