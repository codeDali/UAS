<?php
include 'connection.php';

if (isset($_GET['nama'])) {
    $namaToUpdate = $_GET['nama'];

    if (isset($_POST['update'])) {
        $newNama = $_POST['new_nama'];
        $newKedekatan = $_POST['new_kedekatan'];

        $updateQuery = "UPDATE mitra SET nama='$newNama', kedekatan='$newKedekatan' WHERE nama='$namaToUpdate'";
        $conn->query($updateQuery);

        header("location: admin.php");
        exit();
    }

    $query = "SELECT * FROM mitra WHERE nama='$namaToUpdate'";
    $result = $conn->query($query);
    $mitraToUpdate = $result->fetch_assoc();
} else {
    header("location: admin.php");
    exit();
}
?>


<html>
<head>

    <title>Update Mitra</title>
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
    <h2>Update Mitra</h2>
    <form action="" method="POST">
        <label for="new_nama">Nama Mitra:</label>
        <input type="text" name="new_nama" value="<?php echo $mitraToUpdate['nama']; ?>" required>

        <label for="new_kedekatan">Kedekatan:</label>
        <input type="radio" name="new_kedekatan" value="Sangat Jauh" <?php echo ($mitraToUpdate['Kedekatan'] == 'Sangat Jauh') ? 'checked' : ''; ?>>Sangat Jauh
        <input type="radio" name="new_kedekatan" value="Dekat" <?php echo ($mitraToUpdate['Kedekatan'] == 'Dekat') ? 'checked' : ''; ?>>Dekat
        <input type="radio" name="new_kedekatan" value="Sangat Dekat" <?php echo ($mitraToUpdate['Kedekatan'] == 'Sangat Dekat') ? 'checked' : ''; ?>>Sangat Dekat

        <button type="submit" name="update">Update</button>
    </form>
</body>
</html>
