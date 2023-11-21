<?php
$host =  "localhost";
$usrname = "root";
$passw = "";
$db_name = "cure_pure";
$conn =  mysqli_connect($host, $usrname, $passw, $db_name);

$hp = $_POST["hospname"];
$add = $_POST["add"];
$ph = $_POST["phno"];

$upload_dir = "uploads/"; //uploading img dir
$hos_img = $upload_dir.$_FILES["img"]["name"]; //extracts name of the file from hos.php and adds name to upload_dir - name stored in hos_img
$upload_file = $upload_dir.basename($_FILES["img"]["name"]); //basename extracts the whole name of the fle with extension nd concatenates with upload_dir nd stores in upload_file
$img_type = strtolower(pathinfo($upload_file,PATHINFO_EXTENSION)) ; //from uploaded file name extracts pathinfo like jpg, png,.. and converts to lower nd stored in img_type
$check = $_FILES["img"]["size"]; //from uploades imagefile size is stored in check
$upload_ok = 0;

//checks whether the name already exists
if (file_exists($upload_file)) {
    echo "<script>alert('File exists')</script>";
    $upload_ok = 0;
} else {
    $upload_ok = 1;
    //checks size of file
    if($check !== false) {
        $upload_ok =1;
        if($img_type == 'jpg' || $img_type == 'png' ||$img_type == 'jpeg') {
            $upload_ok = 1;
        } else {
            $upload_ok = 0;
            echo "<script>alert('Please change format')</script>";
        }
    } else {
        echo "<script>alert('File size is 0 choose other image')</script>";
        $upload_ok = 0;
    }
}

if($upload_ok == 0) {
    echo '<script>alert("sorry your file is not uploaded. Please try again")</script>';
} else {
    if ($hp != "" && $ph !="") {
        move_uploaded_file($_FILES["img"]["tmp_name"],$upload_file); //move_uploaded_file - default function to move a file from src to dest in temp_name defaultly img is stored while uploading that file is moved to upload_file ie uploads/

        $sql = "INSERT INTO hos_details (Hos_Name, Address, PhNo, Image) VALUES ('$hp', '$add', '$ph', '$hos_img')";

        if($conn->query($sql) === TRUE) {
            echo "<script>alert('Hospital details added')</script>";
        }
        
    }
}



?>