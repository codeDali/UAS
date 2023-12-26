<?php
 include 'connection.php';
    $nama = $_GET['nama'];
    $sql = "DELETE FROM mitra WHERE nama ='$nama'";
    $conn->query($sql);
    header("Location:admin.php");
?>