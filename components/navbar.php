<?php
session_start();
$logedin = $_SESSION['logedin'];
if (isset($logedin)) {
    $username='Your Profile';
    $link='account.php?q=details';
} else {
    $username="Join Us";
    echo "<script type='text/javascript'>window.top.location='http://localhost/Blood%20Donation/login.php';</script>";
    $link='login.php';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
<link rel="shortcut icon" href="blood.png" type="image/x-icon">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blood Donation Management System</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet" />
    <!-- <link rel="stylesheet" href="css/navbar.css"> -->
    <style>
        :root {
            --black: #31393cff;
            --blue: #2176ffff;
        }

        * {
            margin: 0;
            padding: 0;
            font-family: "Poppins", sans-serif;
        }

        p {
            line-height: 2;
        }

        a {
            color: black;
            text-decoration: none;
        }

        nav {
            display: flex;
            padding: 1rem 5rem;
            justify-content: space-between;
            align-items: center;
            background-color: white;
            filter: drop-shadow(0px 0px 4px var(--black));
        }

        .left h2 a{
            color: var(--blue);
        }

        .list {
            display: flex;
            font-size: 1rem;
            list-style: none;
            gap: 2rem;
            align-items: center;
            transition: all ease-in 2s;
        }


        .list a:hover {
            color: var(--blue);
            border-bottom: 1px solid var(--blue);
        }

        .list :nth-child(5) a {
            padding: 10px 20px;
            font-size: 1rem;
            border: 0;
            border-radius: 5px;
            background-color: var(--blue);
            color: white;
        }

        .list :nth-child(5) :hover {
            color: white;
        }
    </style>
</head>

<body>
    <nav>
        <div class="left">
            <h2><a href="index.php">Blood Donation</a></h2>
        </div>
        <div class="right">
            <div class="list">
                <li><a href="index.php">Home</a></li>
                <li><a href="donerlist.php?blood_grp=all">List of Donor's</a></li>
                <li><a href="reqblood.php">Request Blood</a></li>
                <li><a href="camps.php">Upcoming Camps</a></li>
                <?php
                echo '<li><a href='.$link.'>'.$username.'</a></li>';
                ?>
            </div>
        </div>
    </nav>
    <script src="https://kit.fontawesome.com/f9d8f2f036.js" crossorigin="anonymous"></script>
</body>

</html>