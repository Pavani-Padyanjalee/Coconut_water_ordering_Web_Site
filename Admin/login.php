<?php

session_start();
 
    include('connection.php');  
    $username = $_POST['username'];  
    $password = $_POST['password'];  
      
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($conn, $username);  
        $password = mysqli_real_escape_string($conn, $password);  
      
        $sql = "select *from admin where username = '$username' and password1 = '$password'";  
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            
            header("location:dashboard.php"); // Redirecting to other page. 
            
        }  
        else{  

            echo "Please Try Again.";
            echo "<script>
                    window.location.href = 'http://localhost/coconari/Admin/login.php';
                    alert('Invalid Username or Password!');
                </script>";
            
            
        }     

$conn->close();
?>