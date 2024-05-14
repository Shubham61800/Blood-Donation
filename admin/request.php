<?php
include '../dbcon.php';
session_start();
error_reporting(0);
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $status = $_GET['req_status'];
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $req_id = $_POST['req_id'];
    if (isset($_POST['btn1'])) {
        $sql = "UPDATE `blood_request` SET `status`=2 WHERE `req_id`='$req_id'";
        mysqli_query($con, $sql);
    } else if (isset($_POST['btn2'])) {
        $sql = "UPDATE `blood_request` SET `status`=3 WHERE `req_id`='$req_id'";
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

        .list-donor {
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
            min-height: 65px;
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
        }

        .center {
            display: flex;
            flex-direction: column;
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
    <div class="main-container">
        <?php include 'sidebar.php';?>
        <div class="center">
            <div class="filter">
                <h3>Filter by Request Status</h3>
                <form action="request.php" method="get">
                    <select name="req_status">
                        <option value="1">New Request</option>
                        <option value="2">Accepted</option>
                        <option value="3">Rejected</option>
                    </select>
                    <button id="apply" type="submit">Get</button>
                </form>
            </div>
            <div class="list-donor">
                <?php
                if (isset($_GET['req_status'])) {
                    $status = $_GET['req_status'];
                } else {
                    $status = 1;
                }


                $sql = "SELECT `blood_request`.`req_id`,`donors`.`first_name`, `donors`.`last_name`, `blood_request`.`blood_grp`, `blood_request`.`req_date`,`blood_request`.`mes` FROM `blood_request` JOIN `donors` ON `blood_request`.`req_email`= `donors`.`donor_email` WHERE `blood_request`.`status`='$status'";
                $result = mysqli_query($con, $sql);

                echo '  <p>Sr</p>
                        <p>Name</p>
                            <p>Requested Blood</p>
                            <p>Date</p>
                            <p>Message</p>
                            <p>Action</p>';
                $i = 1;

                while ($row = mysqli_fetch_assoc($result)) {
                    $btn = '<form action="request.php" method="post">
                            <input type="hidden" name="req_id" value="' . $row['req_id'] . '">
                            <button type="submit" class="accept" value="accept" name="btn1">Accept</button>
                            <button type="submit" class="reject" value="reject" name="btn2">Reject</button>
                            </form>';
                    echo "<p>$i</p>";
                    $name = $row['first_name'] . ' ' . $row['last_name'];
                    echo "<p>" . $name . "</p>
                        <p>" . $row['blood_grp'] . "</p>
                        <p>" . $row['req_date'] . "</p>
                        <p>" . $row['mes'] . "</p>" . $btn;
                    $i++;
                }
                ?>
            </div>
        </div>
    </div>
</body>

</html>