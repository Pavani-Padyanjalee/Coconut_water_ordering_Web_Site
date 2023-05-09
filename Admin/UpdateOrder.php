<?php
include "Connection.php";

if(isset($_GET['updateid'])){
    $order_id=$_GET['updateid'];

    $searchItem="SELECT `order_id`, `username`, `order_type`, `quantity`,  `deliver`  FROM `order_details` WHERE `order_id`='$order_id'";

    $result=mysqli_query($conn,$searchItem);

    $row=mysqli_fetch_assoc($result);

    $order_id=$row['order_id'];
    $username=$row['username'];
    $order_type=$row['order_type'];
    $quantity=$row['quantity'];
    $deliver=$row['deliver'];
}

if(isset($_POST['submit'])){
    $order_id=$_POST['order_id'];
    $username=$_POST['username'];
    $order_type=$_POST['order_type'];
    $quantity=$_POST['quantity'];
    $deliver=$_POST['deliver'];

    $updateQ="UPDATE `order_details` SET `username`='$username', `order_type`= '$order_type' , `quantity`='$quantity' , `deliver`='$deliver' WHERE `order_id`='$order_id'";

    $result=mysqli_query($conn,$updateQ);

    if($result){
        header("Location:viewOrder.php");
    }else{
        echo "Error";
    }

}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Item Update</title>


</head>
<style>
    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background-image: url("Images/blue.jpg");
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        height:100vh;
        
    }



    h1 {
        margin-top: 5%;
        text-align: center;
        color: white;
        font-size: 72px;
    }

    .container-fluid {
        width: 100%;
    }

    span {
        color: rgb(255, 136, 0);
    }

    form {
        position: absolute;
        width: 50%;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        border: 5px solid Orange;
    }

    input[type=text] {
        width: 70%;
        height: 35px;
        margin-bottom: 2%;
        position: relative;
        top: 50%;
        left: 50%;
        border-radius: 10px;
        transform: translate(-50%, -50%);
    }

    input[type=password] {
        width: 70%;
        height: 35px;
        position: relative;
        top: 60%;
        left: 50%;
        transform: translate(-50%, -50%);
        border-radius: 10px;
    }

    button {
        position: relative;
        top: 65%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 20%;
        height: 40px;
        border-radius: 10px;
        font-family: Arial;
        font-size: 20px;
    }

    input[type=text]:hover {
        border: 1px solid Orange;
        background-color: rgba(209, 152, 47, 0.897);
        transition: 0.1s;
    }

    input::file-selector-button:hover {
        border: 1px solid Orange;
        background-color: rgba(209, 152, 47, 0.897);
        transition: 0.1s;
    }

    button:hover {
        background-color: Orange;
        color: black;
        transition: 0.5s;
    }
</style>

<body>
    <div class="container-fluid">
        <h1>Update<span> Item</span></h1>

        <form method="POST" enctype="multipart/form-data">
            <input type="text" name="order_id" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                placeholder="order_id" readonly value="<?php echo $order_id?>"><br>
            <input type="text" name="username" class="form-control" id="exampleInputPassword1" placeholder="Name" value="<?php echo $username ?>">
            <br>
            <input type="text" name="order_type" class="form-control" id="exampleInputPassword1" placeholder="Order type" value="<?php echo $order_type ?>">
            <br>
            <input type="text" name="quantity" class="form-control" id="exampleInputPassword1" placeholder="Quantity" value="<?php echo $quantity ?>">
            <br>
            <input type="text" name="deliver" class="form-control" id="exampleInputPassword1" placeholder="" value="<?php echo $deliver ?>">
            <br>
            <br>
            <br>
            <button type="submit" name="submit" class="btn btn-primary">UPDATE</button>
        </form>
    </div>
</body>

</html>