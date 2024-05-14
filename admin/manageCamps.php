<?php
include '../dbcon.php';
$camp_id = $_GET['camp_id'];
$sql1 = "SELECT * FROM `donation_camp` WHERE camp_id='$camp_id'";
$result1 = mysqli_query($con, $sql1);
$row1 = mysqli_fetch_assoc($result1);
$sql2 = "SELECT donors.first_name, donors.donor_email, donors.last_name, donors.gender, donors.blood_grp, donors.mobile_no,user_activity.status FROM user_activity JOIN donors ON user_activity.username = donors.donor_email WHERE user_activity.camp_id = '$camp_id'
ORDER BY user_activity.status ASC";
$res2 = mysqli_query($con, $sql2);
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $userEmail = $_POST['user_email'];
    $camp_id = $_POST['camp_id'];
    $sql1 = "UPDATE `user_activity` SET `status`=2 WHERE username='$userEmail' AND camp_id=$camp_id";
    mysqli_query($con, $sql1);
    $redirectUrl = "http://localhost/Blood%20Donation/admin/manageCamps.php?camp_id=" . $camp_id;
    echo "<script type='text/javascript'>window.location.href ='" . $redirectUrl . "';</script>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .list-user {
            margin: 2rem 0;
            display: grid;
            grid-template-columns: auto auto auto auto max-content;
            column-gap: 0;
        }

        .list-user p,
        .list-user form {
            padding: 10px;
            border: 1px solid black;
            align-self: center;
            border-collapse: collapse;
            text-align: center;
            height: 65px;
        }
    </style>
    </style>
</head>

<body>
    <div class="main-container">
        <?php include 'sidebar.php';
        ?>
        <div class="center">
            <h1><?php echo $row1['camp_name']; ?></h1>
            <p><?php echo $row1['camp_date']; ?></p>
            <p><?php echo $row1['camp_place']; ?></p>
            <br>
            <hr>
            <div class="list-user">
                <?php
                echo '<p>Sr</p>
            <p>Name</p>
            <p>Blood Group</p>
            <p>Mobile No</p>
            <p>Actions</p>';
                $i = 1;
                while ($row2 = mysqli_fetch_assoc($res2)) {
                    if ($row2['status'] == 1) {
                        $form = '<form action="manageCamps.php" method="post">
                <input type="hidden" name="camp_id" value="' . $row1['camp_id'] . '">
                <input type="hidden" name="user_email" value="' . $row2['donor_email'] . '">
                <button type="submit" class="accept">Confirm Donation</button>
                </form>';
                    } else {
                        $form = '<form action="manageCamps.php" method="post">
                <input type="hidden" name="camp_id" value="' . $row1['camp_id'] . '">
                <input type="hidden" name="user_email" value="' . $row2['donor_email'] . '">
                <button type="submit" disabled class="accept">Confirmed</button>
                </form>';
                    }
                    $name = $row2['first_name'] . ' ' . $row2['last_name'];
                    echo "<p>$i</p>
            <p>" . $name . "</p>
            <p>" . $row2['blood_grp'] . "</p>
            <p>" . $row2['mobile_no'] . $form;
                    $i++;
                }
                ?>
            </div>
        </div>
    </div>
</body>

</html>