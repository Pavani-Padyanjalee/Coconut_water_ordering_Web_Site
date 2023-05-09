<?php

include "Connection.php";

if(isset($_POST['submit'])){
    $filename=$_FILES["uploadimage"]["name"];
    $tmpname=$_FILES["uploadimage"]["tmp_name"];
    $folder="Items/".$filename;

    if(move_uploaded_file($tmpname,$folder)){
        echo "Good";
    }else{
        echo "Error";
    }

    $product_no=mysqli_real_escape_String($conn,$_POST['product_no']);
    $product_name=mysqli_real_escape_String($conn,$_POST['product_name']);
    $price=mysqli_real_escape_String($conn,$_POST['price']);
    $quantity=mysqli_real_escape_String($conn,$_POST['quantity']);

    $insertQ="INSERT INTO `product_details`(`product_no`, `product_name`, `price`, `quantity`, `image`) VALUES ('$product_no','$product_name','$price','$quantity','$filename')";

    if(mysqli_query($conn,$insertQ)){
        echo "Q good";
    }else{
        echo "Q Error";
    }

    header("Location:Dashboard.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>


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
        <h1>Item<span> Registration</span></h1>

        <form method="POST" enctype="multipart/form-data">
            <input type="text" name="product_no" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                placeholder="Product No"><br>
            <input type="text" name="product_name" class="form-control" id="exampleInputPassword1" placeholder="Name">
            <br>
            <input type="text" name="price" class="form-control" id="exampleInputPassword1" placeholder="Price">
            <br>
            <input type="text" name="quantity" class="form-control" id="exampleInputPassword1" placeholder="Quantity">
            <br>
            <input type="file" name="uploadimage" class="form-control" id="exampleInputPassword1">
            <br>
            <br>
            <button type="submit" name="submit" class="btn btn-primary">Add Item</button>
        </form>
    </div>
</body>

</html>