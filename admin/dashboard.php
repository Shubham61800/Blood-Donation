<?php
include '../dbcon.php';
$sql1="SELECT COUNT(*)'count' FROM donors";
$result1=mysqli_fetch_assoc(mysqli_query($con,$sql1));
$sql2="SELECT username'id' FROM user_activity WHERE donate_date BETWEEN DATE_ADD(donate_date, INTERVAL -90 DAY) AND CURRENT_DATE";
$result2=mysqli_fetch_assoc(mysqli_query($con,$sql2));
$username=$result2['id'];
$sql2="SELECT COUNT(*)'count' FROM donors WHERE NOT donor_email='$username'";
$result2=mysqli_fetch_assoc(mysqli_query($con,$sql2));
$sql3="SELECT COUNT(*)'count' FROM blood_request WHERE status=1";
$result3=mysqli_fetch_assoc(mysqli_query($con,$sql3));
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .boxes {
            display: grid;
            grid-template-columns: auto auto auto;
            gap: 2rem;
            height: 15rem;
            margin-top: 2rem;
        }

        .box {
            background-color: var(--black);
            text-align: center;
            border-radius: 1rem;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: centers;
            filter: drop-shadow(0 0 2px black);
        }

        .numbers {
            font-size: 6rem;
            font-weight: bold;
            color: white;
        }

        .desc {
            color: white;
            font-size: 1rem;
        }
    </style>
</head>

<body>
    <div class="main-container">
        <?php
        include 'sidebar.php';

        ?>
        <div class="center">
            <h1>Dashboard</h1>
            <div class="boxes">
                <div class="box">
                    <p class="numbers"><?php echo $result1['count'];?></p>
                    <p class="desc">Total Donors</p>
                </div>
                <div class="box">
                    <p class="numbers"><?php echo $result2['count'];?></p>
                    <p class="desc">Unit Blood</p>
                </div>
                <div class="box">
                    <p class="numbers"><?php echo $result3['count'];?></p>
                    <p class="desc">New Request</p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>