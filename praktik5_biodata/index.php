<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata</title>
</head>

<body>

    <h2>Masukan BIODATA anda</h2>
    <form action="home.php" method="POST">
        <table>
            <tr>
                <td>Nama :</td>
                <td><input type="text" name="nama" placeholder="masukan Nama"></td>
            </tr>
            <tr>
                <td>Jenis kelamin :</td>
                <td>
                    <input type="radio" name="gender" value="Pria">Pria
                    <input type="radio" name="gender" value="Wanita">Wanita
                </td>
            </tr>
            <tr>
                <td>TTL :</td>
                <td>
                    <input type="date" name="ttl">
                </td>
            </tr>
            <tr>
                <td>Alamat :</td>
                <td><textarea name="alamat"></textarea></td>
            </tr>
            <tr>
                <td>Status</td>
                <td>
                    <select name="status">
                        <option value="Menikah">Menikah</option>
                        <option value="Single">single</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Agama</td>
                <td>
                    <select name="agama">
                        <option value="Islam">Islam</option>
                        <option value="Kristen">Kristen</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Budha">Budha</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <br>
                    <button type="submit">Masukan Biodata</button>
                </td>
            </tr>
        </table>
    </form>

</body>

</html>