<?php
// Koneksi ke database
$conn = mysqli_connect ('localhost', 'root', 'root', 'php_dasar');

function queryMysql($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

// ambil data (fetch) mahasiswa dari object result
// mysqli_fetch_row() // mengembalikan array numerik
// mysqli_fetch_assoc() // mengembalikan array associative
// mysqli_fetch_array() // mengembalikan keduanya
// mysqli_fetch_object() // mengembalikan object

// $mahasiswas = mysqli_fetch_assoc($result);

// var_dump($mahasiswas);

?>