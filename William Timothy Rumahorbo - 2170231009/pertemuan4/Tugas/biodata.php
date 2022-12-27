<!DOCTYPE html>
<html lang="en">
<head>
    <title>form data</title>
</head>
<body>
    <h1>Biodata</h1>
    <form method="POST" action="hasil.php">
        <table rules="rows">
        <tr>
                <td>Nama</td>
                <td><input type="text" name="nim"</td>
            </tr>
            <tr>
                <td>Nim</td>
                <td><input type="text" name="nama"</td>
            </tr>
            <tr>
                <tr>
                    <td>Tanggal lahir</td>
                    <td><input type="date" name="tgllahir"</td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td><input type="text" name="alamat"</td>
                </tr>
                <tr>
                    <td>Hobi</td>
                    <td><input type="text" name="hobi"</td>
                </tr>
                <td>Jenis Kelamin</td>
                <td><input type="radio" name="sts" value="Laki-Laki"> Laki-Laki
                <input type="radio" name="sts" value="Perempuan"> Perempuan</td>
            </tr>
           
        </table>
        <br>
        <button type="submit" name="submit" value="Submit">Proses Data</button>
        <button type="reset" name="reset" value="reset">reset</button>
</body>
</html>