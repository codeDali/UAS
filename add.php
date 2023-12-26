<?php

 include 'connection.php';
    $NIM = $_POST['NIM'];
    $Nama = $_POST['Nama'];
    $Jurusan = $_POST['Jurusan'];
    $Telpon = $_POST['Telpon'];
    $sql = "INSERT INTO mahasiswa (NIM,Nama,Jurusan,Telpon) VALUES ('$NIM','$Nama','$Jurusan','$Telpon')";
    $conn->query($sql);
    header("Location:home.php");

?>