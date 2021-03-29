<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Login</title>
</head>
<body>

    <h1>Login Sederhana</h1>
    <div class="frame-login">
        <form action="proses-login.php" method="post">
            <!-- Nama -->
            <label for="nama">Nama :</label>
            <input type="text" name="nama" placeholder="nama"><br><br>
            <!-- Email -->
            <label for="email">Email :</label>
            <input type="email" name="email" placeholder="email"><br><br>
            <!-- Submit button -->
            <button type="submit">Login</button>
        </form>
    </div>

</body>
</html>