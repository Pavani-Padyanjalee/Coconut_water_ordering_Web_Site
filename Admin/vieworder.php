<?php
include "Connection.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<style>
    body {
        font-family: 'Arial';
        background-image: url("Images/light.jpg");
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        /* height:100vh; */
    }

    h1 {
        text-align: center;
        color: black;
    }

    span {
        color: green;
    }

    .btn_sec {
        margin-top: 5%;
    }

    .btn_sec button {
        position: relative;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    .table_sec {
        margin-top: 5%;
        width: 90%;
    }

    .add_btn {
        width: 150px;
        height: 50px;
        border-radius: 10px;
        font-family: 'Segoe UI';
        font-weight: bold;
        font-size: 20px
    }

    .add_btn:hover {
        background-color: orange;
        transition: 0.5s;
    }

    table {
        width: 90%;
        position: relative;
        left: 55%;
        transform: translate(-50%, 0%);
        text-align: center;
        font-family: 'Arial';
    }

    .btn {
        width: 150px;
        height: 40px;
        border-radius: 10px;
        font-family: 'Segoe UI';
        font-weight: bold;
        font-size: 15px;
        margin-top: 20px;
    }

    #update:hover {
        background-color: orange;
        transition: 0.5s;
    }

    #delete:hover {
        background-color: red;
        color: white;
        transition: 0.5s;
    }

    a {
        text-decoration: none;
        color: black;
    }

    img {
        width: 75px;
    }
</style>

<body>
    <header>
        <div class="container btn_sec">
            
        </div>
        <div class="container-fluid">
            <h1>Welcome to <span>COCONARI</span> Admin Panel</h1>
        </div>
    </header>
    <div class="container-fluid table_sec">
        <table border=1>
            <thead>
                <tr>
                    <th scope="col">Order ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Order Type</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Deliver</th>
                    <th scope="col">Option</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $searchAllQ = "SELECT * FROM `order_details`";

                $result = mysqli_query($conn, $searchAllQ);

                if ($result) {
                    // echo "Good";
                    while ($row = mysqli_fetch_assoc($result)) {
                        $order_id = $row['order_id'];
                        $username = $row['username'];
                        $order_type = $row['order_type'];
                        $quantity = $row['quantity'];
                        $deliver=$row['deliver'];
                ?>
                        <tr>
                            <th scope="row"><?php echo $order_id ?></th>
                            <td><?php echo $username ?></td>
                            <td><?php echo $order_type ?></td>
                            <td><?php echo $quantity ?></td>
                            <td><?php echo $deliver ?></td>
                            <td>
                                <button class="btn" id="update"><a href="UpdateOrder.php?updateid=<?php echo $order_id; ?>">Update</button></a>
                                <button class="btn" id="delete"><a href="DeleteOrder.php?deleteid=<?php echo $order_id; ?>">Delete</button></a><br>
                            </td>
                        </tr>
                <?php
                    }
                } else {
                    // echo "Error";
                }

                ?>
            </tbody>
        </table>
    </div>
</body>

</html>