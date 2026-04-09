
<!DOCTYPE html>
<html>
<head>
    <title>CRUD Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">

<h3>Data Mahasiswa</h3>

<a href="add.php" class="btn btn-success mb-3">+ Tambah</a>
<a href="delete.php" class="btn btn-danger mb-3">Logout</a>

<table class="table table-bordered">
    <tr>
        <th>NPM</th>
        <th>Nama</th>
        <th>Aksi</th>
    </tr>

<?php
$data = mysqli_query($conn, "SELECT * FROM mahasiswa");

while ($row = mysqli_fetch_assoc($data)) {
?>
<tr>
    <td><?= $row['npm']; ?></td>
    <td><?= $row['nama']; ?></td>
    <td>
        <a href="edit.php?npm=<?= $row['npm']; ?>" class="btn btn-warning btn-sm">Edit</a>
        <a href="index.php?hapus=<?= $row['npm']; ?>" class="btn btn-danger btn-sm">Delete</a>
    </td>
</tr>
<?php } ?>
</table>

</body>
</html>
