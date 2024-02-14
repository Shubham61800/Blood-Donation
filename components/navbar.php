<!DOCTYPE html>
<html lang="en">

<head>
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
            width: 100vw;
            position: fixed;
            top:0;
            left: 0;
        }

        .left h2 {
            color: var(--blue);
        }

        .list {
            display: flex;
            font-size: 1rem;
            list-style: none;
            gap: 2rem;
            align-items: center;
            transition: all ease-in;
        }

        .list a:hover {
            color: var(--blue);
            border-bottom: 1px solid var(--blue);
        }

        .list button {
            padding: 10px 20px;
            font-size: 1rem;
            color: white;
            border: 0;
            border-radius: 5px;
            background-color: var(--blue);
        }

        .section1 {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
            text-align: center;
            height: 30rem;
            background-image: url("https://www.livemint.com/lm-img/img/2023/06/13/600x338/Blood_Donation_1686691682853_1686691683079.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            background-color: var(--blue);
            background-blend-mode: soft-light;
        }
    </style>
</head>

<body>
    <nav>
        <div class="left">
            <h2>Blood Donation</h2>
        </div>
        <div class="right">
            <div class="list">
                <li><a href="index.php">Home</a></li>
                <li><a href="donerlist.php?blood_grp=all">List of Donor's</a></li>
                <li><a href="hello">Request Blood</a></li>
                <li><button type="submit">My Profile</button></li>
            </div>
        </div>
    </nav>
</body>

</html>