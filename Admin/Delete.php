<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

include "Connection.php";

if(isset($_GET['deleteid'])){
    $product_no=$_GET['deleteid'];

    $deleteQ="DELETE FROM `product_details` WHERE `product_no`='$product_no'";

    $result=mysqli_query($conn,$deleteQ);
    if($result){
        echo "<script>alert('Delete Successfull')</script>";
         
    }else{
        echo "error Q";
    }

}

?>
<a href="Dashboard.php">Back to Dashboard</a>
</body>
</html>