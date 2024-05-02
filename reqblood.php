<?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        include 'dbcon.php';
        session_start();
        $email=$_SESSION['email'];
        $bldgrp=$_POST['blood_grp'];
        $mes=$_POST['mes'];
        $current_date=date("Y/m/d");
        $sql="INSERT INTO `blood_request` (`req_email`, `blood_grp`, `mes`, `status`,`req_date`) VALUES ('$email', '$bldgrp', '$mes', '1', '$current_date');";
        mysqli_query($con,$sql);
    }
?>
<?php include 'components/navbar.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reqeust Blood</title>
    <style>
        :root {
            --black: #31393cff;
            --blue: #2176ffff;
        }
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        label{
            font-size: 1rem;
            font-weight: 500;
        }
        input{
            padding: 10px;
            width: 25rem;
            border-radius: 10px;
            border: 1px solid;
            font-size: 1rem;
        }
        #submit{
            padding: 10px;
            width: 15rem;
            border-radius: 10px;
            border: none;
            font-size: 1rem;
            background-color: var(--blue);
            color: white;
            cursor: pointer;
        }
        textarea{
            border-radius: 10px;
            size-adjust: none;
            font-size: 1rem;
            padding: 10px;
        }
        h1,form{
            padding: 1rem 5rem;
        }
        form{
            display: grid;
            grid-template-columns: 30% auto;
            row-gap: 16px;
            align-items: center;
        }
        select{
            width: 14rem;
            padding:1rem;
            border-radius: 10px;
        }
    </style>
</head>
<body>
    <h1>Reqeust Blood</h1>
    <form action="reqblood.php" method="post">
        <!-- <label for="fname">First Name</label><input placeholder="Enter Your First Name" type="text" name="first_name" id="fname"  required>
        <label for="lname">Last Name</label><input placeholder="Enter Your Last Name"type="text" name="last_name" id="lname" required>
        <label for="gender">Gender</label><input placeholder="Select Gender" type="text" name="gender" id="gender" required> -->
        <label for="blood_grp">Blood Group</label><select name="blood_grp" id="">
        <option value="A-">A-</option>
                <option value="A+">A+</option>
                <option value="B-">B-</option>
                <option value="B+">B+</option>
                <option value="AB-">AB-</option>
                <option value="AB+">AB+</option>
                <option value="O-">O-</option>
                <option value="O+">O+</option>
            </select>
        <!-- <label for="mobile_no">Mobile No.</label><input type="text" placeholder="Enter Mobile Number" name="mobile_no" id="mobile_no" required>
        <label for="address">Address</label><input type="text" placeholder="Enter Address" name="address" id="address" required> -->
        <label for="mes">Why Need Blood</label><textarea  placeholder="Why you need blood?"name="mes" id="mes"></textarea>
        <button type="submit" id="submit">Send Reqeust</button></div>
    </form>
</body>
</html>