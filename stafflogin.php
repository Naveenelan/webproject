<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="docstaffsigninlogin.css">
    <script src="formvalid.js" defer></script>
</head>
<body>
<div class="login">
    <h1>Login</h1>
    <h3>Welcome back please Login!</h3>
    <div class="loginform">
    <form action="stlogin1.php" method="post" id="myForm" onsubmit="validateForm(event)">
        E-Mail<br>
        <input type="email" name="mail" placeholder="E-Mail"><br><br>
    Password:<br>
    <div class="eyePass">
        <input type="password" id="Password" name="pass" placeholder="Password" >
        <img src="eyeclose.png" id="eyeicon" onclick="passvisi()">
    </div>
    <span id="passErr" style="color: rgb(13, 13, 13);"></span>
    <input type="submit" value="Login" name="login" class="loginbtn">
    </div>
    </form>
    <p>Not have an Account?</p>
    <p><a href="staff.php">Sign Up Here</a></p>
    </div>
</div>
</body>
</html>