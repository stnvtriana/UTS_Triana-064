<?= $this->extend('Layout/main') ?>

<?= $this->section('content') ?>

<section class="profile-panel text-center">

    <h1>Profil Siti Novi Triana</h1>

    <img src="<?= base_url('Image/ana.png') ?>"
         alt="Foto Profil"
         class="profile-picture">

    <div class="profile-details text-start">

        <p>
            <strong>Nama :</strong>
            <span>Siti Novi Triana</span>
        </p>

        <p>
            <strong>Alamat :</strong>
            <span>Tanjunganom, Nganjuk</span>
        </p>

        <p>
            <strong>Tempat, tanggal lahir :</strong>
            <span>Nganjuk, 24 November 2005</span>
        </p>

        <p>
            <strong>Program studi :</strong>
            <span>Sistem Informasi</span>
        </p>

        <p>
            <strong>Semester :</strong>
            <span>5</span>
        </p>

    </div>

    <p class="profile-description">
        Saya adalah mahasiswa Institut Teknologi Mojosari yang sedang belajar
        web design menggunakan HTML dan CSS. Dalam proses belajar, saya
        mempelajari cara membuat tampilan yang menarik, mengatur layout,
        dan membuat website yang responsif. Walaupun terkadang mengalami
        kesulitan, saya tetap semangat untuk belajar dan terus mencoba.
    </p>

</section>

<a class="btn btn-maroon mt-3" href="<?= site_url('home') ?>">
    ← Kembali ke Home
</a>

<?= $this->endSection() ?>
