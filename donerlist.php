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
            margin: 1rem 5rem;
        }

        .card {
            width: 16rem;
            height: 10rem;
            border: 1px solid black;
            border-radius: 1rem;
        }

        .card:hover {
            filter: drop-shadow(0px 6px 5px balck);
        }

        .container-card {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        card button {
            width: 100%;
            background-color: blue;
        }

        .bldgrp {
            border-radius: 50%;
            font-size: 1.5rem;
            padding: 5px;
            position: relative;
            top: 1rem;
            left: 1rem;
        }

        table {
            width: 100%;
        }

        td {
            padding: 10px;
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
            padding-left: 5rem;
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

        td,
        th {
            height: 2rem;
            font-size: 1rem;
            border: 1px solid black;
        }

        #req {
            border: 2px solid var(--blue);
            border-radius: 10px;
            padding: 10px;
        }

        .list-donor {
            margin: 2rem 5rem;
            border-radius: 1rem;
            display: grid;
            grid-template-columns: auto auto auto auto;
            column-gap: 0;
        }

        .list-donor p {
            padding: 10px;
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>
</head>

<body>
    <?php
    include 'components/navbar.php';
    include 'dbcon.php';
    ?>

    <h1>List of Donors</h1>

    <div class="filter">
        <h3>Filter by Blood Group</h3>
        <form action="donerlist.php" method="get">
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

    <div class="list-donor">
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
            <p>Mobile No</p>';
        $i = 1;
        while ($row = mysqli_fetch_assoc($result)) {
            $name = $row['first_name'] . ' ' . $row['last_name'];
            echo "<p>$i</p>
            <p>" . $name . "</p>
            <p>" . $row['blood_grp'] . "</p>
            <p>" . $row['mobile_no'] . "</p></tr>";
            $i++;
        }
        ?>
    </div>

</body>

</html>