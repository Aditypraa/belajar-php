<?php
// Membuat array
$names = ['John', 'Doe', 'Jane', 'Doe', 'Foo', 'Bar'];

// Membuat array asosiatif
$socials = [
"https://facebook.com" => "Facebook",
"https://twitter.com" => "Twitter",
"https://instagram.com" => "Instagram",
"https://youtube.com" => "Youtube"
];

// Menampilkan array
echo 'Menggunakan print_r() : ';
print_r($names);

echo '<br>';
echo '<br>';

echo 'Menggunakan var_dump() : ';
var_dump($names);

echo '<br>';
echo '<br>';

// Menampilkan Array
foreach ($names as $name) {
echo $name . '<br>';
}

echo '<br>';

// Menampilkan Array Asosiatif
foreach ($socials as $key => $value) {
echo $key . ' : ' . $value . '<br>';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array and Foreach</title>
</head>
<body>

<ul>
    <?php foreach ($names as $name) : ?>
        <li><?= $name; ?></li>
    <?php endforeach; ?>
</ul>

<br>

<ul>
   <?= $nomor = 1; ?>
   <?php foreach ($socials as $key => $value) : ?>
    <li><?= $nomor ?> <a href="<?= $key ?>"> <?= $value ?> </a></li>
    <?= $nomor++; ?>
    <?php endforeach; ?>
   <?php $nomor = 1; ?>
</ul>

<br>

<ul>
   <?php $nomor = 1; ?>
   <?php foreach ($socials as $key => $value) : ?>
    <li><?= $nomor ?> <a href="<?= $key ?>"> <?= $value ?> </a></li>
    <?php $nomor++; ?>
    <?php endforeach; ?>
   </ul>
    
</body>
</html>