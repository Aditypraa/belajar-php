<?php
echo "Hello World!"; // echo digunakan untuk menampilkan teks
echo "<br>";
print "Hello World!"; // print digunakan untuk menampilkan teks
print "<br>";
var_dump("Hello World!"); // var_dump digunakan untuk menampilkan tipe data dan nilai
echo("<br>");
print_r("Hello World!"); // print_r digunakan untuk menampilkan nilai


// Variabel
$nama = "Fikri"; // Variabel $nama dengan nilai "Fikri"
$umur = 16; // Variabel $umur dengan nilai 16

// Assigment
// =, +=, -=, *=, /=, %=, .=
$x = 1;
$x += 5; // $x = $x + 5
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Php</title>
</head>
<body>
    <h1>Variabel</h1>
    <p>Nama : <?php echo $nama . " Umur " . $umur; ?></p>

    <h1>Assigment</h1>
    <p>Total : <?php echo $x; ?></p>
    
</body>
</html>