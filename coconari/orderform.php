<?php

include('connection.php'); 

$z=$_POST["username"];
// $a=$_POST["email"];
// $b=$_POST["password"];
$c=$_POST["order_type"];
$d=$_POST["quantity"];


//insert data

$sql = "INSERT INTO `order_details` (`username`,`order_type`,`quantity`)
VALUES ('$z','$c','$d')";


if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
  header("location:ordertaken.html"); // Redirecting to other page. 


} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();
?>