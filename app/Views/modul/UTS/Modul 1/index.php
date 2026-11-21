<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Modul 1</title>

        <link rel="stylesheet" href="<?= base_url('css/style modul1.css') ?>">
</head>

<body>
    <div id="box">

        <div id="header" align="center">
            <h1>Siti Novi Triana</h1>
        </div>

        <div id="menubar" align="center">
        <a href="<?= site_url('modul1/home') ?>">Home</a>
        <a href="<?= site_url('modul1/prak1_triana') ?>">Profil</a>
        <a href="<?= site_url('modul1/portofolio') ?>">Portofolio</a>
        </div>

        <div id="content">
            <h2>Selamat Datang di Website Saya</h2>

            <p>
                Saya Siti Novi Triana, alamat saya Dsn. Bandar Alim,
                Ds. Demangan Kec. Tanjunganom, Kab. Nganjuk.
                Saya lahir pada tanggal 24 November 2005.
                Saya adalah anak terakhir dari 5 bersaudara.
            </p>

            <p>
                Saya mahasiswa Institut Teknologi Mojosari semester 4
                Prodi Sistem Informasi. Yang saat ini sedang belajar
                web design dengan menggunakan bahasa pemrograman HTML
                dan CSS. Terkadang saya mengalami kesulitan dalam
                membuat website, tetapi saya tetap semangat untuk
                belajar dan terus mencoba.
            </p>

            <p>
                Ada banyak hal yang saya pelajari dalam membuat website,
                seperti cara membuat tampilan yang menarik, cara mengatur
                layout, dan cara membuat website yang responsif.
                Saya berharap dengan belajar web design, saya bisa
                membuat website yang bermanfaat bagi banyak orang.
            </p>

            <p>
                Selain belajar web design, saya juga memiliki hobi lain
                seperti menonton film, bermain game, dan memasak,
                terutama masakan-masakan yang saat ini viral di media sosial.
                Terima kasih sudah membaca.
            </p>

        </div>

        <div id="footer" align="center">
            Web Design by Siti Novi Triana <br>
            2026 <br>
            <p>&copy; 2026 Profil Siti Novi Triana - All Rights Reserved</p>
        </div>
        <a class="btn btn-maroon mt-3" href="<?= site_url('portofolio') ?>">← Back</a>
    </div>
</body>
</html>
```