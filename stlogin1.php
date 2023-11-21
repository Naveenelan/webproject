<?php
session_start();
$host =  "localhost";
$usrname = "root";
$passw = "";
$db_name = "cure_pure";
$conn =  mysqli_connect($host, $usrname, $passw, $db_name);

$em = $_POST["mail"];
$p = $_POST["pass"];


if (isset($_POST['login'])) {
    if ($em != '' && $p !='') {
        $sql = "SELECT * FROM staff_details";
        $result = $conn->query($sql);
if ($result->num_rows > 0)
{
while($row = $result->fetch_assoc())
{
if($result) {
            $hashPass = $row["Password"];
            if (password_verify($p, $hashPass)) {
                header("location: hos.php");
            }
            else {
                echo "<script>alert('Incorrect Details!!!'); window.location='stafflogin.php';</script>";

            }
            
        }

    }
}
}              
}
$conn->close();
?>
