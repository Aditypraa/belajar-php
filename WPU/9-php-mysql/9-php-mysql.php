<?php
require 'database.php';
$mahasiswas = queryMysql("SELECT * FROM mahasiswa");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - MYSQL</title>
</head>
<body>

<h1>Daftar Mahasiswa</h1>

<table border="1" cellpadding="10" cellspacing="0">
<thead>
<tr>
        <th>No.</th>
        <th>Nama</th>
        <th>NIM</th>
        <th>Email</th>
        <th>Jurusan</th>
        <th>Gambar</th>
        <th>Action</th>
    </tr>
</thead>
<?php $i = 1; ?>
<?php foreach($mahasiswas as $mahasiswa) : ?>
<tbody>
    <tr>
        <td><?= $i;?></td>
        <td><?= $mahasiswa["nama"]; ?></td>
        <td><?= $mahasiswa["nrp"]; ?></td>
        <td><?= $mahasiswa["email"]; ?></td>
        <td><?= $mahasiswa["jurusan"]; ?></td>
        <td><img src="img/<?= $mahasiswa["gambar"]; ?>" width="50"></td>
        <td>
            <a href="">Ubah</a> | <a href="">Hapus</a>
        </td>
    </tr>
</tbody>
<?php $i++; ?>
<?php endforeach; ?>


</table>
    
</body>
</html>