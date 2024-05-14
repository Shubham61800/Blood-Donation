<?php
include './dbcon.php';
include './components/navbar.php';
error_reporting(0);
session_start();
$username = $_SESSION['user_email'];
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $camp_date = $_POST['camp_date'];
    $camp_id = $_POST['camp_id'];
    $sql = "SELECT `donate_date` FROM `user_activity` WHERE `username`='$username' AND `status`=2 LIMIT 1;";
    $result1 = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result1);
    $nRow = mysqli_num_rows($result1);
    if ($nRow == 1) {
        $date1 = date_create($row['donate_date']);
        $date2 = date_create($camp_date);
        $days = date_diff($date1, $date2);
        $days_between = $days->d;
        if ($days_between >= 90) {
            $sql = "INSERT INTO `user_activity` (`username`, `donate_date`, `camp_id`, `status`) VALUES ('$username', '$camp_date', '$camp_id', '1')";
            mysqli_query($con, $sql);
        } else {
            $type = "disable";
        }
    } else {
        $sql = "INSERT INTO `user_activity` (`username`, `donate_date`, `camp_id`, `status`) VALUES ('$username', '$camp_date', '$camp_id', '1')";
        mysqli_query($con, $sql);
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        input {
            display: none;
        }

        h1 {
            padding: 2rem 5rem;
        }

        .contain {
            display: grid;
            grid-template-columns: 18rem 18rem 18rem 18rem;
            margin: 2rem 5rem;
            column-gap: 1rem;
        }

        .box {
            border-radius: 10px;
            padding: 1rem;
            border: 1px solid black;
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }

        button {
            padding: 1rem;
            border-radius: 10px;
            border: none;
            background-color: var(--blue);
            color: white;
            width: 100%;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <h1>Upcoming Camps</h1>
    <div class="contain">
        <?php
        $sql = "SELECT * FROM `donation_camp`";
        $result = mysqli_query($con, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
            echo '  <div class="box">
                    <form action="camps.php" method="POST">
                        <h2>' . $row['camp_name'] . '</h2>
                        <p>Date: ' . $row['camp_date'] . '</p>
                        <p>Place: ' . $row['camp_place'] . '</p>
                        <input type="hidden" name="camp_id" value="' . $row['camp_id'] . '">
                        <button type="' . $type . '">Book Appointment</button>
                    </form>
                    </div>';
        }
        ?>
    </div>

</body>

</html>