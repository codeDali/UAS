<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pertemuan_9";

//create connection
$conn = new mysqli($servername, $username, $password, $dbname);

//check connection
if ($conn->connect_error) {
    die("Connection Failed". $conn->connect_error);
}

?>