<?php
    $Mobile=$_POST['mobile'];
    $Password=$_POST['password'];
    $conn = new mysqli('localhost','root','','drone rentals');
    if($conn->connect_error){
        die('Connection Failed: '.$conn->connect_error);
    }
    else{
        $query = "SELECT * FROM host_details WHERE Mobile_Number = '$Mobile' AND Password = '$Password'";
        $result = $conn->query($query);
        // Check if a row is returned
        if ($result->num_rows == 1) {
            // User is authenticated, set session variables
            echo "logged in Successfully.";
        } else {
            // Invalid login credentials
            echo "Invalid username or password.";
        }
        // Close the database connection
        $conn->close();
    }
?>