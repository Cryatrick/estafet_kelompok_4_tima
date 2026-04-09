<?php
session_start();
include "conn.php";

if (!isset($_SESSION['npm'])) {
    header("Location: login.php");
    exit;
}

// DELETE
if (isset($_GET['hapus'])) {
    $npm = $_GET['hapus'];
    mysqli_query($conn, "DELETE FROM mahasiswa WHERE npm='$npm'");
    header("Location: index.php");
}
?>
