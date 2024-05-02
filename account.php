<!DOCTYPE html>
<?php
include 'dbcon.php';
session_start();
$email = $_SESSION['email'];
$sql = "SELECT  * FROM `donors` WHERE `donor_email`='$email'";
$result = mysqli_fetch_assoc(mysqli_query($con, $sql));
$username = strtoupper($result['first_name'] . " " . $result['last_name']);

?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Profile</title>
    <link rel="shortcut icon" href="blood.png" type="image/x-icon">
    <link rel="shortcut icon" href="blood.png" type="image/x-icon">
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
            /* overflow: hidden; */
        }

        body {
            background-repeat: no-repeat;
            background-size: cover;
        }

        .main-container {
            display: flex;
            width: 100%;
            gap: 6rem;
        }

        .center {
            padding: 4rem 2rem;
            height: 100vh;
            width: 100%;
        }

        .sidebar {
            display: flex;
            flex-direction: column;
            padding: 4rem 3rem;
            gap: 3rem;
            height: 100vh;
            background-color: var(--blue);
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

        .sidebar a {
            color: white;
            text-decoration: none;
        }

        .container {
            width: 100%;
            height: 100vh;
            display: flex;
            margin-left: 5rem;
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

        .list-donor {
            margin-top: 2rem;
            display: grid;
            grid-template-columns: auto auto auto auto;
            column-gap: 0;
            
        }

        .list-donor p {
            padding: 10px;
            border: 1px solid black;
            border-collapse: collapse;
            text-align: center;
        }

        .status {
            padding: 5px;
            color: white;
        }

        .req {
            background-color: yellow;
            color: black;
        }

        .confirm {
            background-color: greenyellow;
            color: black;
        }

        .reject {
            background-color: lightcoral;
        }
    </style>
</head>

<body>
    <div class="main-container">
        <div class="sidebar">
            <div class="dt"><i class="fa-regular fa-user"></i><?php echo $username; ?></div>
            <a href="account.php?q=details">Your Details</a>
            <a href="account.php?q=activity">Activity</a>
            <a href="account.php?q=request">Request</a>
            <a href="logout.php">Logout<i class="fa-solid fa-right-from-bracket"></i></a>
        </div>
        <div class="center">
            <h1>Your Requests</h1>
            <?php
            switch ($_GET['q']) {
                case 'details':
                    echo "details";
                    break;
                case 'activity':
                    echo "activity";
                    break;
                case 'request':
                    echo '<div class="list-donor">';
                    $sql = "SELECT * FROM `blood_request` WHERE `req_email` = '$email'";
                    $result = mysqli_query($con, $sql);
                    $num = mysqli_num_rows($result);

                    echo '  <p>Sr</p>
                            <p>Requested Blood Group</p>
                            <p>Date</p>
                            <p>Status</p>';
                    $i = 1;
                    while ($row = mysqli_fetch_assoc($result)) {
                        $status=$row['status'];
                        if ($status == 1) {
                            $text = "Requested";
                            $class = "req";
                        } else if ($status == 2) {
                            $text = "Accepted";
                            $class = "confirm";
                        } else {
                            $text = "Rejected";
                            $class = "reject";
                        }
                        echo "<p>$i</p>
                <p>" . $row['blood_grp'] . "</p>
                <p>" . $row['req_date'] . "</p>";
                echo '<p class="status '.$class.'">' . $text . "</p></tr>";
                        $i++;
                    }
                    echo "</div>";
                    break;
            }
            ?>
        </div>
    </div>
    <script src="https://kit.fontawesome.com/f9d8f2f036.js" crossorigin="anonymous"></script>
</body>

</html>