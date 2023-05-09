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
    $order_id=$_GET['deleteid'];

    $deleteQ="DELETE FROM `order_details` WHERE `order_id`='$order_id'";

    $result=mysqli_query($conn,$deleteQ);
    if($result){
        echo "<script>alert('Delete Successfull')</script>";
         
    }else{
        echo "error Q";
    }

}

?>
<a href="vieworder.php">Back to Dashboard</a>
</body>
</html>