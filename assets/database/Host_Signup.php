<?php
    $Name=$_POST['name'];
    $Email=$_POST['email'];
    $Mobile=$_POST['mobile'];
    $Drone=$_POST['drone'];
    $Password=$_POST['password'];
    $conn = new mysqli('localhost','root','','drone rentals');
    if($conn->connect_error){
        die('Connection Failed: '.$conn->connect_error);
    }
    else{
        $stmt = $conn->prepare("insert into host_details values (?,?,?,?,?)");
        $stmt->bind_param("ssiss",$Name,$Email,$Mobile,$Drone,$Password);
        $stmt->execute();
        header('location:http://localhost/FSD Mini Project/Host_Login.html');
        $stmt->close();
        $conn->close();
    }
?>