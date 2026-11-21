<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input Text</title>
</head>
<body>
    <h2>Form Input Data</h2>
    <form enctype="multipart/form-data" action="<?= site_url('modul7/simpan') ?>" method="post">
        <?= csrf_field() ?>
        Nama : <input type="text" name="nama" required><br><br>
        Tempat Lahir: <input type="text" name="tempat" required><br><br>
        Tanggal Lahir : <input type="date" name="tgl" required><br><br>
        Jenis Kelamin : <br>
        <input type="radio" name="jk" value="Laki-Laki" required> Laki-Laki <br>
        <input type="radio" name="jk" value="Perempuan"> Perempuan <br><br>
        Agama :
        <select name="agama" required>
            <option value="Islam">Islam</option>
            <option value="Kristen">Kristen</option>
            <option value="Budha">Budha</option>
            <option value="Hindu">Hindu</option>
            <option value="Konghucu">Konghucu</option>
        </select><br><br>
        Alamat : <textarea name="alamat"></textarea><br><br>
        Hobi : <br>
        <input type="checkbox" name="hobi1" value="Berenang"> Berenang <br>
        <input type="checkbox" name="hobi2" value="Memasak"> Memasak <br>
        <input type="checkbox" name="hobi3" value="Berlari"> Berlari <br>
        <input type="checkbox" name="hobi4" value="Mancing"> Mancing <br>
        <input type="checkbox" name="hobi5" value="Lainnya"> Lainnya <br><br>
        Masukkan Foto : <input type="file" name="file" accept="image/*"><br><br>
        <input type="submit" value="Kirim">
    </form>
    <br>
    <a href="<?= site_url('modul7') ?>">Kembali ke Modul 7</a>
</body>
</html>
