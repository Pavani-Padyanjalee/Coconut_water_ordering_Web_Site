<?php

include('connection.php'); 
$z=$_POST["username"];
$a=$_POST["email"];
$b=$_POST["password"];
$c=$_POST["telephone"];
$d=$_POST["address"];


//insert data

$sql = "INSERT INTO `customer_details` (username,email,password1,telephone,address)
VALUES ('$z','$a','$b','$c','$d')";


if ($conn->query($sql) === TRUE) {
  // echo "New record created successfully";
  
  header("location:orderform.html"); // Redirecting to other page. 

} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}


// $sql = "SELECT username,email,password1,telephone,address FROM `customer_details`";
// $result = $conn->query($sql);

// if ($result->num_rows > 0) {
//   // output data of each row
//   while($row = $result->fetch_assoc()) {
//     echo "<br>username:- " . $row["username"]."...email:- " . $row["email"]. " ...password:- " . $row["password1"]. 
//         "...telephone:-" . $row["telephone"]. "...address:-" . $row["address"].
//    "<br>";;
//   }
//  else {
//   echo "0 results";
// }

$conn->close();
?>