<?php
    require_once 'connection.php';
    $sql = "SELECT * FROM hos_details";
    $all_hos = $conn->query($sql);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="homemain.css">

</head>
<body>
<div class="navss">
    <header class="navs">
        <nav class="navbar">
        <ul>
            <li><a href="home.html">HOME</a></li>
            <li><a href="about.html">ABOUT</a></li>
            <li><a href="#">STAFF</a></li>
            <li><a href="contact.html">CONTACT</a></li>
        </ul>
        </nav>
    </header>
    <br><h3> A calm mind brings inner strength and self-confidence, so that's very important for good health.</h3>
</div>
<main>
    <?php
        while($row = mysqli_fetch_assoc($all_hos)) {
    ?>
    <div class="card">
        <div class="image">
            <img src="<?php echo $row["Image"]; ?>" alt="">
        </div>
        <div class="caption">
            <p class="hospname"><b>HOSPITAL NAME: </b><?php echo $row["Hos_Name"]; ?></p>
            <p class="add"><b>ADDRESS: </b><?php echo $row["Address"]; ?></p>
            <p class="phno"><b>CONTACT:</b><?php echo $row["PhNo"]; ?></p> 
        </div>
        <br>
        <a href = "user.html">
        <button class="book">Book Appoinment</button>
        </a>
    </div>
    <?php
        }
    ?>
</main>
</body>
</html>