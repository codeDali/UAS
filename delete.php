<?php
 include 'connection.php';
    $NIM = $_GET['NIM'];
    $sql = "DELETE FROM mahasiswa WHERE NIM ='$NIM'";
    $conn->query($sql);
    header("Location:home.php");
?>