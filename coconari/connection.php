<?php
$servername = "localhost";
$Name = "root";
$Password = "";
$dbname="coco";

$conn = new mysqli($servername,$Name, $Password,$dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>