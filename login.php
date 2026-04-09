<?php 
session_start();
include "conn.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $npm = mysqli_real_escape_string($conn, $_POST["npm"]); // Keamanan tambahan

    $query = mysqli_query($conn, "SELECT * FROM mahasiswa WHERE npm='$npm'");
    $data = mysqli_fetch_assoc($query);

    if($data) {
        // Simpan data login ke session
        $_SESSION['login'] = true; 
        $_SESSION['nama'] = $data['nama'];
        $_SESSION['npm'] = $data['npm'];
        
        // Redirect ke index.php
        header("Location: index.php");
        exit;
    } else {
        $error = "NPM tidak ditemukan!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card p-4 shadow">
                <h2 class="text-center mb-4">Login Mahasiswa</h2>

                <?php if(isset($error)) { ?>
                    <div class="alert alert-danger"><?= $error; ?></div>
                <?php } ?>

                <form method="POST">
                    <div class="mb-3">
                        <label>Masukkan NPM</label>
                        <input type="text" name="npm" class="form-control" placeholder="Contoh: 20210123" required>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Login</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
