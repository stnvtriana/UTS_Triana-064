<?= $this->include('layout/header', ['title' => 'Modul ' . $nomor]) ?>
<section class="content-panel">
    <p class="eyebrow">PORTOFOLIO PEMBELAJARAN</p>
    <h1>Modul <?= esc($nomor) ?></h1>
    <p>Halaman untuk Modul <?= esc($nomor) ?> sudah disiapkan di CI4.</p>
    <p>Isi materi atau projek dari folder Modul <?= esc($nomor) ?> belum tersedia pada kode yang dikirim. Setelah file modul dimasukkan, tautan ini dapat diarahkan ke halaman aslinya.</p>
    <a class="btn btn-maroon" href="<?= site_url('home') ?>">← Kembali ke Portofolio</a>
</section>
<?= $this->include('Layout/footer') ?>
