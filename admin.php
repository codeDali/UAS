<?php

session_start();
include 'connection.php';

    if(!isset($_SESSION['username'])){
        header("location:login.php");
        exit();
    }
    if(isset($_SESSION['username'])){
        $username  = $_SESSION['username'];
    }

?>


<html>
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--link css bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    
    <title>SosmedKita.</title>

    <!--link icon-->
    <link rel="icon" type="image/x-icon" href="images/newspaper-folded.png">

    <!--link css sendiri-->
    <link rel="stylesheet" href="styleadmin.css">

    <!--link google fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@500;700&family=Playfair+Display:wght@700;900&display=swap" rel="stylesheet">
    </head>
    <body>
        <h1>Selamat Datang 
           <b><?php echo $_SESSION['username']; ?></b>
        </h1>
        <table border="1">
            <tr>
                <th>Nama</th>
                <th>Kedekatan</th>
                <th>Action</th>
                <th>Action</th>
            </tr>
            <?php
            $result = $conn->query("SELECT * FROM mitra");
                while($row =$result->fetch_assoc()){
                    echo "<tr>";
                        echo "<td>" . $row['nama'] ."</td>";
                        echo "<td>" . $row['Kedekatan'] ."</td>";
                        echo "<td><a href='delete.php?nama=" . $row['nama'] . "'>Delete</a></td>";
                        echo "<td><a href='update.php?nama=" . $row['nama'] . "'>Update</a></td>";
                    echo "</tr>";
                    }
            ?>
        </table>
        
        <form action="add.php" method="POST">
            <input type="text" name="nama" placeholder="Nama Mitra">
            
        <input type="radio" name="kedekatan" value="Sangat Jauh">
        Sangat Jauh</input>
        <input type="radio" name="kedekatan" value="Dekat">
        Dekat</input>
        <input type="radio" name="kedekatan" value="Sangat Dekat">
        Sangat Dekat</input>
            <button type="submit">Tambah Mitra</button>
        </form>
        <button class="logout-button"><a href="logout.php">Logout</a></button>
    </body>
</html>