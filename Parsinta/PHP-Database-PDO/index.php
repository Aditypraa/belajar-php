<?php
require 'connect.php';
// empty artinya kosong
// !empty artinya tidak kosong

// empty adalah fungsi yang digunakan untuk mengecek apakah suatu variabel itu kosong atau tidak
// $_POST adalah variabel global yang digunakan untuk mengambil data dari form dengan method POST
if (!empty($_POST)) { 
    $email = $_POST['email']; // $_POST['email'] : mengambil data dari form dengan method POST yang memiliki name="email"
    $password = $_POST['password']; // $_POST['password'] : mengambil data dari form dengan method POST yang memiliki name="password"

    // $db diambil dari file connect.php
    // prepare : untuk menyiapkan query sebelum di eksekusi
    $query = $db->prepare("INSERT INTO users (email, password) VALUES (:email, :password)"); // :email dan :password adalah placeholder

    // CARA 1
    //    $query->execute([ // execute : untuk mengeksekusi query
    //        'email' => $email, // "email" diambil dari nama kolom di database, $email diambil dari variabel yang diinputkan user
    //        'password' => $password // "password" diambil dari nama kolom di database, $password diambil dari variabel yang diinputkan user
    //    ]);

    // CARA 2
    $query->execute(compact('email', 'password')); // compact : untuk membuat array asosiatif

    // header : untuk mengalihkan halaman
    header('Location: index.php');
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Database</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <h1 class="text-center">PHP Database</h1>

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <form action="" method="post">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>

                    <a href="users.php" class="btn btn-secondary">Lihat Data</a>
                </form>
            </div>
        </div>
    </div>

</body>

</html>