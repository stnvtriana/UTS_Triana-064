<!doctype html>
<html>
<head>
    <title>Foodcourt Ana</title>
</head>
<body>
    <h2>Restoran Ana</h2>
    <img src="<?= base_url('image/foodcourt.png') ?>" height="200" width="400">

    <h3>Daftar Menu</h3>
    <table border="1">
        <caption>Table Harga Menu</caption>
        <tr>
            <th>Kode Menu</th>
            <th>Nama Menu</th>
            <th>Harga</th>
            <th>Gambar</th>
        </tr>
        <tr>
            <td>M001</td>
            <td>Mie Ayam</td>
            <td>Rp 10.000</td>
            <td><img src="<?= base_url('image/mie ayam.jpg') ?>" width="145" height="150"></td>
        </tr>
        <tr>
            <td>M002</td>
            <td>Bakso</td>
            <td>Rp 7.000</td>
            <td><img src="<?= base_url('image/bakso.jpg') ?>" width="145" height="150"></td>
        </tr>
        <tr>
            <td>M003</td>
            <td>Sate</td>
            <td>Rp 15.000</td>
            <td><img src="<?= base_url('image/sate.jpg') ?>" width="145" height="150"></td>
        </tr>
</table>
        <p>
            Kunjungi kami di: <a href="https://maps.google.com" target="_blank">Lokasi Foodcourt</a>
        </p>
        <a href="<?= site_url('modul/1') ?>">← Kembali</a>

        <hr> <footer>
            <p>&copy; 2024 Restoran Ana - All Rights Reserved</p>
        </footer>
</body>
</html> 