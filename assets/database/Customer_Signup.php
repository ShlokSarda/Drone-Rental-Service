<?php
    $Name=$_POST['name'];
    $Email=$_POST['email'];
    $Mobile=$_POST['mobile'];
    $Password=$_POST['password'];
    $conn = new mysqli('localhost','root','','drone rentals');
    if($conn->connect_error){
        die('Connection Failed: '.$conn->connect_error);
    }
    else{
        $stmt=$conn->prepare("insert into customer_details values (?,?,?,?)");
        $stmt->bind_param("ssis",$Name,$Email,$Mobile,$Password);
        $stmt->execute();
        header('location:http://localhost/FSD Mini Project/Customer_Login.html');
        $stmt->close();
        $conn->close();
    }
?>