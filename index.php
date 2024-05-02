<?php include 'components/navbar.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blood Donation Management System</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet" />
    <!-- <link rel="stylesheet" href="css/style.css"> -->
    <style>
        body {
            width: 100%;
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

        .section1 h1 {
            font-size: 3rem;
            color: white;
            margin-top: 3rem;
        }

        .details {
            padding: 1rem 5rem;
        }

        .details h1 {
            margin-top: 5rem;
            color: var(--blue);
        }

        img {
            float: right;
            height: 14rem;
            margin-left: 1rem;
            border-radius: 1rem;
        }
        .section2{
            display: grid;
            grid-template-columns: auto auto auto;
            gap: 1rem;
            padding: 1rem 5rem;
        }
        .sm-container{
            padding: 1.5rem;
            border: 1px solid Black;
            border-radius: 1rem;
        }
        .bld-grp{
            float: none;
            border-radius: 1rem;
            padding: 1rem 0rem;
            width: 50%;
            margin: auto auto;
        }
        footer{
            width: 100%;
            margin-top: 2rem;
            height: 4rem;
            text-align: center;
            justify-content: center;
            background-color: var(--blue);
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        #grps{
            float: none;
            height: fit-content;
        }
    </style>
</head>

<body>
    <div class="section1">
        <h1>A single drop of your blood could be <br> a drop of life for someone else.</h1>
    </div>
    <div class="details">
        <h1>Our Mision</h1>
        <p>
            Our mission is simple yet profound: to save lives through the gift of blood donation. We believe that every
            drop of blood donated has the power to make a difference, to bring hope, and to sustain life. By encouraging
            more people to donate blood, we aim to ensure that hospitals and medical centers always have an adequate
            supply of blood for those in need. Through our efforts, we strive to create a community of donors who
            understand the critical importance of their contribution and the immense impact it has on individuals,
            families, and entire communities. Join us in this noble mission, and together, let's make a lifesaving
            difference.</p>
        <h1>Why Blood Donation</h1>
        <img src="images/image2.jpg" alt="">
        <p>
            Blood donation is crucial for several reasons. Firstly, donated blood saves lives in emergencies such as
            accidents, surgeries, and childbirth complications, where quick access to blood can be life-saving.
            Additionally, blood transfusions are vital for patients with various medical conditions like cancer, blood
            disorders, and chronic illnesses, helping them to recover and improve their quality of life. Regular blood
            donations also ensure that blood banks maintain an adequate supply of all blood types, reducing the risk of
            shortages during times of high demand. By donating blood, individuals directly contribute to the well-being
            of others in their community, embodying the spirit of compassion and solidarity.</p>

        <h1>Need of Blood Donation</h1>
        <img src="images/image 3.jpg" alt="">
        <p>Blood donation meets critical needs in healthcare by providing a safe and stable supply of blood for
            transfusions. This is vital for various medical treatments, including surgeries, cancer therapy, and
            treatment of blood disorders. Blood donation also helps in emergencies like accidents and natural disasters
            where there is an urgent need for blood. Additionally, regular blood donation plays a key role in
            maintaining a sufficient blood supply, reducing the risk of shortages and ensuring that patients receive the
            care they need. Overall, blood donation is essential for saving lives and improving health outcomes for
            countless individuals.</p>
        <h1>All about Blood?</h1>
    </div>

    <div class="section2">
        <div class="sm-container">
            <h2>What is Blood?</h2>
            <p>Blood is a vital fluid that circulates through our bodies, delivering essential nutrients and oxygen
                to cells while removing waste products. It consists of several components, including red blood
                cells, white blood cells, platelets, and plasma, each serving a unique function in maintaining our
                health.</p>
        </div>
        <div class="sm-container">
            <h2>How is Blood Collected?</h2>
            <p>Blood donation is a safe and straightforward process that typically takes less than an hour. A
                trained healthcare professional will clean an area on your arm and insert a sterile needle to draw
                blood into a sealed bag. After donation, you'll rest briefly and enjoy refreshments before resuming
                your day.</p>
        </div>
        <div class="sm-container">
            <h2>Who Can Donate Blood?</h2>
            <p>Most healthy adults between the ages of 18 and 65 are eligible to donate blood. Donors must weigh at
                least 110 pounds and pass a brief medical screening to ensure their safety and the safety of the
                blood supply.</p>
        </div>
        <div class="sm-container">
            <h2>Where Can You Donate?</h2>
            <p>Blood donation can take place at various locations, including blood donation centers, hospitals, and
                mobile blood drives. Many communities host regular blood drives, making it convenient to donate.</p>
        </div>
        <div class="sm-container">
            <h2>Why Donate Blood?</h2>
            <p>Your blood donation can save lives. Whether it's helping someone undergoing surgery, receiving cancer
                treatment, or recovering from an accident, your gift of blood is a gift of life.</p>
        </div>
        <div class="sm-container">
            <h2>Be a Hero, Donate Blood Today</h2>
            <p>Join us in our mission to ensure a stable blood supply for those in need. Your donation can make a
                significant difference in someone's life. Schedule your donation appointment today and be a hero to
                those in need.</p>
        </div>
        
    </div>
    <div class="bld-grp"><img src="images/image 5.jpg" alt="" id="grps"></div>
    
<footer>Copyright @ 2024 Blood Donation Management System</footer>


</body>

</html>