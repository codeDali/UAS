<?php

include 'connection.php';
if (isset($_POST['username']) && isset($_POST['password'])) {
    session_start();
    
    $username=$_POST['username'];
    $password=$_POST['password'];
    
    $query = "SELECT * FROM user WHERE username='$username' AND password='$password' ";
    
    $result = $conn->query($query);
    $isExist = $result->num_rows;


    if($isExist){
        $_SESSION['username'] =$username;
        header("location:home.php");
    } else{
        echo '<script>alert("Username atau password salah")</script>';
    }
}


?>