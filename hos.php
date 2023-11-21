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
    <h1>Welcome</h1>
    <h3>Enter your Hospital details!</h3>
    <div class="loginform">
    <form action="hosdb.php" method="post" enctype="multipart/form-data">
    Hospital name:
    <input type="text" name="hospname"id="hospname" placeholder="Hospital Name"><br><br>
    Address: <br>
    <input type="text" id="add" name="add" placeholder="Address" ><br><br>
    Phone Nmber:<br>
    <input type="number" name="phno" id="phno" placeholder="Phone Number" >
    Hospital Image:
    <input type="file"  name="img" id="img" >
    <input type="submit" value="Submit" name="login" class="loginbtn">
    </div>
    </form><br>
    </div>
</div>
</body>
</html>