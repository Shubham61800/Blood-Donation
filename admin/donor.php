<?php
include '../dbcon.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $donor_email=$_POST['donor_email'];
        $sql = "DELETE FROM `donors` WHERE donor_email='$donor_email'";
        mysqli_query($con, $sql);
        echo "<script type='text/javascript'>window.location.href = 'http://localhost/Blood%20Donation/admin/donor.php?blood_grp=all';</script>";
}
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donor's List</title>
    <link rel="shortcut icon" href="blood.png" type="image/x-icon">
    <style>
        :root {
            --black: #31393cff;
            --blue: #2176ffff;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        h1 {
            margin: 1rem 2rem;
        }

        select {
            font-size: 1rem;
            padding: 10px;
            width: 10rem;
            border-radius: 10px;
        }


        .filter {
            display: flex;
            align-items: center;
            gap: 16px;
            padding-left: 2rem;
        }

        #apply,
        #reqbtn {
            color: white;
            font-size: 1rem;
            padding: 10px;
            width: 6rem;
            border: none;
            border-radius: 10px;
            background-color: var(--blue);
        }
        #req {
            border: 2px solid var(--blue);
            border-radius: 10px;
            padding: 10px;
        }

        .list-grid{
            margin: 2rem 2rem;
            border-radius: 1rem;
            display: grid;
            grid-template-columns: max-content auto auto auto  max-content;
            column-gap: 0;
        }
        .list-grid p,
        .list-grid form {
            padding: 10px;
            border: 1px solid black;
            align-self: center;
            border-collapse: collapse;
            text-align: center;
            height: 65px;
        }
    </style>
</head>

<body>
    <div class="main-container">
        <?php
        include 'sidebar.php';
            ?>

        <div class="center">
            <h1>List of Donors</h1>

            <div class="filter">
                <h3>Filter by Blood Group</h3>
                <form action="donor.php" method="get">
                    <select name="blood_grp" id="">
                        <option value="all">---Select---</option>
                        <option value="A-">A-</option>
                        <option value="A+">A+</option>
                        <option value="B-">B-</option>
                        <option value="B+">B+</option>
                        <option value="AB-">AB-</option>
                        <option value="AB+">AB+</option>
                        <option value="O-">O-</option>
                        <option value="O+">O+</option>
                    </select>
                    <button id="apply" type="submit">Get</button>
                </form>
            </div>

            <div class="list-grid">
                <?php
                $check = $_GET['blood_grp'];
                if ($check == "all") {
                    $sql = "SELECT * FROM `donors`";
                } else {
                    $sql = "SELECT * FROM `donors` WHERE `blood_grp`='$check'";
                }
                $result = mysqli_query($con, $sql);
                $num = mysqli_num_rows($result);

                echo '<p>Sr</p>
            <p>Name</p>
            <p>Blood Group</p>
            <p>Mobile No</p>
            <p>Actions</p>';
                $i = 1;
                while ($row = mysqli_fetch_assoc($result)) {
                    $form = '<form action="donor.php" method="post">
                <input type="hidden" name="donor_email" value="' . $row['donor_email'] . '">
                <button type="submit" class="reject">Remove</button>
                </form>';
                    $name = $row['first_name'] . ' ' . $row['last_name'];
                    echo "<p>$i</p>
            <p>" . $name . "</p>
            <p>" . $row['blood_grp'] . "</p>
            <p>" . $row['mobile_no'] . $form ;
                    $i++;
                }
                ?>
            </div>
        </div>
    </div>

</body>

</html>