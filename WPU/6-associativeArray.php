<?php
   // Contoh array multidimensi
   $mahasiswa = [
    [
        "nama" => "Aditya",
        "usia" => 25,
        "jurusan" => "Informatika"
    ],
    [
        "nama" => "Putra",
        "usia" => 23,
        "jurusan" => "Sistem Informasi"
    ],
    [
        "nama" => "Budi",
        "usia" => 24,
        "jurusan" => "Teknik Komputer"
    ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
    </style>
</head>
<body>

<h2>Daftar Mahasiswa</h2>

<table>
    <tr>
        <th>Key</th>
        <th>Value</th>
    </tr>

    
    <?php foreach ($mahasiswa as $key => $mhs) : ?>
        <tr>
            <td colspan="2"><strong>Mahasiswa ke-<?= $key + 1; ?></strong></td>
        </tr>
        <?php foreach ($mhs as $field => $value) : ?>
            <tr>
                <td><?= $field; ?></td>
                <td><?= $value; ?></td>
            </tr>
        <?php endforeach; ?>
    <?php endforeach; ?>
    
</table>

</body>
</html>
