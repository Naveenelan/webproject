<html>
<body>
<?php
session_start();
$host =  "localhost";
$usrname = "root";
$passw = "";
$db_name = "cure_pure";
$conn =  mysqli_connect($host, $usrname, $passw, $db_name);

$n = $_POST["fname"];
$em = $_POST["mail"];
$p = $_POST["pass"];
$ph = $_POST["phno"];
$wrk = $_POST["proff"];

if($n != ''|| $em!='' || $p!='') {
    $hashedPass = password_hash($p, PASSWORD_BCRYPT);
    
    $sql = "INSERT INTO doc_details (Name, Email, Password, PhNo, Proff) VALUES ('$n', '$em', '$hashedPass', '$ph', '$wrk')";
    
    $result  = mysqli_query($conn, $sql);
    
    if($result) {
    header("Location: doclogin.php");
    exit();
    }

}
$conn->close();

?>
</body>
</html>