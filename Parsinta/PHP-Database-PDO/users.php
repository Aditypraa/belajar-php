<?php
require 'connect.php';

// $db diambil dari file connect.php
// query : untuk mengeksekusi query
$users = $db->query('SELECT * FROM users')->fetchAll(PDO::FETCH_OBJ);
// print_r($users);

// Delete

// Menggunakan ISSET
// if(isset($_GET['user'])){ // isset : untuk mengecek apakah suatu variabel sudah di set atau belum
//     $id = $_GET['user'];

//     $query = $db->prepare("DELETE FROM users WHERE id = ?");
//     $query->execute([$id]);

//     header('Location: users.php');
// }

// Menggunakan EMPTY
if (!empty($_GET['user'])) { // empty : untuk mengecek apakah suatu variabel itu kosong atau tidak
    $id = $_GET['user'];

    $query = $db->prepare("DELETE FROM users WHERE id = ?");
    $query->execute([$id]);

    header('Location: users.php');
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

    <h1 class="text-center">All Data</h1>

    <div class="container">
        <div class="row">
            <div class="col-md-6">
               <h4 class="mt-5">Semua Data</h4>

                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Email</th>
                            <th>Password</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; ?>
                        <?php foreach ($users as $user) : ?>
                            <tr>
                                <td><?= $no ?></td>
                                <td><?= $user->email ?></td>
                                <td><?= $user->password ?></td>
                                <td>
                                    <a href="edit.php?user=<?= $user->id?>">Edit</a> /
                                    <a href="users.php?user=<?= $user->id?>" onclick="return confirm('Are you sure?')">Delete</a>
                                </td>
                            </tr>
                            <?php $no++; ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</body>

</html>