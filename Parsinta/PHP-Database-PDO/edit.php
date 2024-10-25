<?php
require 'connect.php';

$id = $_GET['user'];
// die($id);

$query = $db->prepare("SELECT * FROM users WHERE id = ?");
$query->execute([$id]);

$user = $query->fetchObject();

if(!$user){
    header('Location: users.php');
}

// !empty($_POST) : jika form sudah di submit
if (!empty($_POST)) {

    $email = $_POST['email'];
    $password = $_POST['password'];

    // Cara 1
    // $query = $db->prepare("UPDATE users SET email = :email, password = :password WHERE id = :id");

    // $query->execute([
    //     'email' => $email,
    //     'password' => $password,
    //     'id' => $id
    // ]);

    // Cara 2
    $query = $db->prepare("UPDATE users SET email = ?, password = ? WHERE id = ?");
    $query->execute([$email, $password, $id]);

    header('Location: users.php');
    exit;
}

// var_dump($user);

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

    <h1 class="text-center">Edit : <?= $user->email ?></h1>

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <form action="" method="post">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" value="<?= $user->email ?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" name="password" value="<?= $user->password ?>">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>

                    <a href="users.php" class="btn btn-secondary">Lihat Data</a>
                </form>
            </div>
        </div>
    </div>

</body>

</html>