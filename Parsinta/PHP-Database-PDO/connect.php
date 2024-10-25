<?php

// Menggunakan PDO
try {
    $db = new PDO('mysql:host=localhost;dbname=belajar_php_parsinta', 'root', 'root');
} catch (PDOException $e) {
    echo "Koneksi Gagal " . $e->getMessage();
}

// Menggunakan MySQLi
// try {
//     $db = new mysqli('localhost', 'root', 'root', 'belajar_php_parsinta');
// } catch (mysqli_sql_exception $e) {
//     echo "Koneksi Gagal " . $e->getMessage();
// }