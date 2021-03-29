<?php

$nama = $_POST['nama'];
$gender = $_POST['gender'];
$ttl = $_POST['ttl'];
$alamat = $_POST['alamat'];
$status = $_POST['status'];
$agama = $_POST['agama'];


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
    <h1>Selamat datang, <?= $nama ?> !</h1>
    <hr>
    <table>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><?= $nama ?></td>
        </tr>
        <tr>
            <td>Gender</td>
            <td>:</td>
            <td><?= $gender ?></td>
        </tr>
        <tr>
            <td>TTL</td>
            <td>:</td>
            <td><?= $ttl = date('d-M-Y')  ?></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td><?= $alamat ?></td>
        </tr>
        <tr>
            <td>Status</td>
            <td>:</td>
            <td><?= $status ?></td>
        </tr>
        <tr>
            <td>Agama</td>
            <td>:</td>
            <td><?= $agama ?></td>
        </tr>
    </table>

</body>

</html>