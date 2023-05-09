<?php


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
        color:white;
        font-size:72px;
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
        font-family: Arial, Helvetica, sans-serif;
    }

    input[type=text]:hover {
        border: 1px solid Orange;
        transition: 0.1s;
    }

    input[type=password]:hover {
        border: 1px solid Orange;
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
        <h1>Admin Panel <span>Login</span></h1>

        <form action="login.php" method="POST">
            <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                placeholder="Username">
            <input type="password" name="password" class="form-control" id="exampleInputPassword1"
                placeholder="Password">
            <br>
            <br>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>

</html>