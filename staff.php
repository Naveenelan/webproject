<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in</title>
    <link rel="stylesheet" href="docstaffsigninlogin.css">
</head>
<body>
    <div class="signup">
        <h1>Sign Up</h1>
        <p>Already have a account?</p>
        <p><a href="stafflogin.php">Login here</a></p>
        <h6>Enter Valid details to Create a Account</h6>
    <form action="staffsignin.php" method="post" id="myForm" onsubmit="validateForm(event)">
        <div class="loginform">
        Name<br>
        <input type="text" placeholder="Name" name="fname"><br><br>
        E-Mail<br>
        <input type="email" id="emailField" name="mail" oninput="validateEmail(emailField.value)" placeholder="E-Mail"><br>
        <span id="emailError" style="color: rgb(13, 13, 13);"></span><br>
        Password<br>
    <div class="eyePass">
        <input type="password" id="Password" name="pass" placeholder="Password" oninput="validatePass(Password.value)" >
        <img src="eyeclose.png" id="eyeicon" onclick="passvisi()">
    </div>
        <br>Confirm Password<br>
    <div class="eyeCPass">
        <input type="password"  id="cnfrmpass" placeholder="Confirm Password " oninput="validateCPass(cnfrmpass.value)">
        <img src="eyeclose.png" id="eyeiconcp" onclick="cpassvisi()">
    </div>
        <span id="passErr" style="color: rgb(13, 13, 13);"></span>
        <br>Phone number<br>
        <input type="number" name="phno" placeholder="Mobile Number"><br><br>
        Proffesion<br>
        <input type="text" name="proff" placeholder="Expert in"><br><br>
        <input type="submit" name="Submit" value="Submit">
    </div>
</div>
</form>
</div>
<script src="formvalid.js"></script>
</body>
</html>