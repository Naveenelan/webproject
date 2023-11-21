<?php     
    session_start(); 
    if (isset($_GET['Logout'])) 
    {
        session_destroy(); 
        unset($_SESSION['Name']);
        header("location: index.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link  rel="stylesheet" href="home11.css">
    <title>Home</title>
</head>
<body>
<?php if (!isset($_SESSION['Name']))
{?>
<div class="bgim">
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
        <h1>Building Healthier Tomorrows Today </h1><br>
            <h2>Compassionate care and a commitment to your well-being. Our mission is to provide quality healthcare with a personal touch. Your health is your convinience </h2>    <br> <br>
        <div class="login">
                <div class="btn1">
                    <div>
                        <a href="doclogin.php">
                            <button class="doc">DOCTOR</button>
                        </a>
                    </div>
                </div><br><br>
                <div class="btn2">
                    <div>
                        <a href="home.php">
                            <button class="us">USER</button><br>
                        </a>
                    </div>
                </div><br><br>
                <div class="btn3">
                    <div>
                        <a href="stafflogin.php">
                            <button class="st">STAFF</button><br>
                        </a>
                    </div>
                </div><br><br>
</div>  
</div>
<?php }?>

<?php if (isset($_SESSION['name']))
{?>
<li><a href="index.php">Home</a></li>
<li><a href="mark_enter.php">Mark Enter</a></li>
<li><a href="view_mark_enter.php">View Mark</a></li>
<li> <a href="index.php?Logout='1'">Logout</a> </li>
<?php }?>



</body>
</html>