<?php
include "conn.php";

if(isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $npm = $_POST['npm'];

    mysqli_query($conn, "INSERT INTO mahasiswa (nama, npm) VALUES ('$nama', '$npm')");
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>HALAMAN LOG IN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="container mt-4">




    <div class="d-flex justify-content-between align-items-center mb-4">
        
        <!-- Tombol untuk menuju ke halaman add.php -->
       
    </div>

<form method="POST">
   
    <input type="text" name="npm" class="form-control mb-2" placeholder="NPM" required>

    <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
    <a href="index.php" class="btn btn-secondary">Kembali</a>
</form>

</body>
</html>