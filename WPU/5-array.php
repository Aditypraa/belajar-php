<?php
// Array

// Membuat Array
// Cara lama
$hari = array("Senin", "Selasa", "Rabu");

// Cara baru
$bulan = ["Januari", "Februari", "Maret"];

// Books
$books = [
    [
        "title" => "The Subtle Art of Not Giving a F*ck",
        "author" => "Mark Manson",
        "price" => 119000,
        "image" => "subtle.jpg"
    ],
    [
        "title" => "Atomic Habits",
        "author" => "James Clear",
        "price" => 179000,
        "image" => "atomic.jpg"
    ],
    [
        "title" => "The Power of Habit",
        "author" => "Charles Duhigg",
        "price" => 159000,
        "image" => "power.jpg"
    ]
];

// // Menampilkan Array
// // var_dump() / print_r()
// var_dump($hari);
// echo "<br>";
// print_r($bulan);
// echo "<br>";
// var_dump($books);

// // Menampilkan 1 elemen pada array
// echo $bulan[1];

// // Menambahkan elemen baru pada array
// var_dump($hari);
// $hari[] = "Kamis";
// echo "<br>";
// var_dump($hari);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
    <style>
        .kotak {
            width: 50px;
            height: 50px;
            background-color: salmon;
            text-align: center;
            line-height: 50px;
            margin: 3px;
            float: left;
        }
        .clear {
            clear: both;
        }
    </style>
</head>
<body>
    <?php for ($i = 0; $i < count($bulan); $i++) : ?>
        <div class="kotak"><?= $bulan[$i]; ?></div>
    <?php endfor; ?>

    <div class="clear"></div>

    <?php foreach ($hari as $a) : ?>
        <div class="kotak"><?= $a; ?></div>
    <?php endforeach; ?>

    <div class="clear"></div>

    <?php foreach ($books as $book) : ?>
        <ul>
            <li>
                <img src="img/<?= $book["image"]; ?>" alt="">
            </li>
            <li>Title: <?= $book["title"]; ?></li>
            <li>Author: <?= $book["author"]; ?></li>
            <li>Price: Rp. <?= $book["price"]; ?></li>
        </ul>
    <?php endforeach; ?>
    
</body>
</html>