<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "coco";

$conn=mysqli_connect($servername,$username,$password,$dbname);

if ($conn) {
    // echo "database sucess";
}else{
    // echo "database error";
}
?>