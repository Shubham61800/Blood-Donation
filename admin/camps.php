<?php
include '../dbcon.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['btn1'])) {
    $name = $_POST['camp_name'];
    $place = $_POST['camp_place'];
    $date = $_POST['camp_date'];
    $sql = "INSERT INTO `donation_camp` ( `camp_name`, `camp_date`, `camp_place`) VALUES ('$name', '$date', '$place')";
    $result = mysqli_query($con, $sql);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="blood.png" type="image/x-icon">
    <title>Manage Camps</title>
    <style>
        button {
            padding: 1rem;
            background-color: var(--blue);
            color: white;
            width: max-content;
            border-radius: 10px;
        }

        input {
            padding: 1rem;
            border-radius: 10px;
        }

        .camp-list {
            margin-top: 2rem;
            display: grid;
            grid-template-columns: max-content max-content;
            gap: 1rem;
        }

        .contain input {
            display: none;
        }

        h1 {
            padding: 2rem 0rem 0rem 0rem;
        }

        .contain {
            display: grid;
            grid-template-columns: 16rem 16rem 16rem 16rem;
            margin: 2rem 0rem;
            column-gap: 1rem;
            row-gap: 1rem;
        }

        .box {
            border-radius: 10px;
            padding: 1rem;
            border: 1px solid black;
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }

        .contain button {
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
    <div class="main-container">
        <?php
        include 'sidebar.php';
        ?>
        <div class="center">
            <h1>Add Camp</h1>
            <br>
            <hr>
            <form action="camps.php" method="POST">
                <div class="camp-list">
                    <label for="">Camp Name</label>
                    <input type="text" name="camp_name" required>
                    <label for="">Camp Place</label>
                    <input type="text" name="camp_place" required>
                    <label for="">Camp Date</label>
                    <input type="date" name="camp_date" required>
                    <button type="submit" name="btn1" value="add">Add Camp</button>
                </div>
            </form>

            <h1>Manage Camps</h1>
            <br>
            <hr>
            <div class="contain">
                <?php
                $sql = "SELECT * FROM `donation_camp`";
                $result = mysqli_query($con, $sql);
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '  <div class="box">
                    
                        <h3>' . $row['camp_name'] . '</h3>
                        <p>Date: ' . $row['camp_date'] . '</p>
                        <p>Place: ' . $row['camp_place'] . '</p>
                        <form action="manageCamps.php" method="GET">
                        <input type="hidden" name="camp_id" value="' . $row['camp_id'] . '">
                        <button type="submit">More Info</button></form>
                    
                    </div>';
                }
                ?>
            </div>
        </div>
    </div>
</body>

</html>