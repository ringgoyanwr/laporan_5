<?php

    $nama = $_POST['nama'];
    $email = $_POST['email'];

    if(!strlen($nama) > 0 & !strlen($email) > 0){
        header('Location: error.php');
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <h1>Selamat datang, <?= $nama ?> !</h1><hr>
    <table>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><?= $nama ?></td>
        </tr>
        <tr>
            <td>Email</td>
            <td>:</td>
            <td><?= $email ?></td>
        </tr>
        <tr>
            <td>Jam</td>
            <td>:</td>
            <td><?= date('H:i') ?></td>
        </tr>
        <tr>
            <td>Hari</td>
            <td>:</td>
            <td><?= date('l') ?></td>
        </tr>
        <tr>
            <td>Date</td>
            <td>:</td>
            <td><?= date('d-M-Y') ?></td>
        </tr>
    </table>

</body>
</html>