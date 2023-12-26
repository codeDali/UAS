<?php

 include 'connection.php';
    $nama = $_POST['nama'];
    $kedekatan = $_POST['kedekatan'];
    $sql = "INSERT INTO mitra (nama,kedekatan) VALUES ('$nama','$kedekatan')";
    $conn->query($sql);
    header("Location:admin.php");

?>