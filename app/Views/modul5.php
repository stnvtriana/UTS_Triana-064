<?= $this->include('Layout/header', ['title' => 'Modul 5']) ?>

<section class="page-heading">
    <p class="eyebrow">HASIL PEMBELAJARAN</p>
    <h1>Modul 5</h1>
    <p>Silakan pilih latihan yang ingin dibuka.</p>
</section>

<div class="row g-3">
    <div class="col-sm-6 col-lg-4"><a href="<?= site_url('modul5/perulangan') ?>" class="module-card"><strong>Perulangan</strong></a></div>
    <div class="col-sm-6 col-lg-4"><a href="<?= site_url('modul5/perulangan2') ?>" class="module-card"><strong>Perulangan 2</strong></a></div>
    <div class="col-sm-6 col-lg-4"><a href="<?= site_url('modul5/perulangan4') ?>" class="module-card"><strong>Perulangan 4</strong></a></div>
    <div class="col-sm-6 col-lg-4"><a href="<?= site_url('modul5/perulangan5') ?>" class="module-card"><strong>Perulangan 5</strong></a></div>
    <div class="col-sm-6 col-lg-4"><a href="<?= site_url('modul5/perulangan6') ?>" class="module-card"><strong>Perulangan 6</strong></a></div>
    <div class="col-sm-6 col-lg-4"><a href="<?= site_url('modul5/perulangan7') ?>" class="module-card"><strong>Perulangan 7</strong></a></div>
    <div class="col-sm-6 col-lg-4"><a href="<?= site_url('modul5/tugasPerulangan') ?>" class="module-card"><strong>Tugas Perulangan</strong></a></div>
    <div class="col-sm-6 col-lg-4"><a href="<?= site_url('modul5/tugasPerulangan2') ?>" class="module-card"><strong>Tugas Perulangan 2</strong></a></div>
    <div class="col-sm-6 col-lg-4"><a href="<?= site_url('modul5/tugasPerulangan3') ?>" class="module-card"><strong>Tugas Perulangan 3</strong></a></div>
</div>

<a class="btn btn-maroon mt-4" href="<?= site_url('portofolio') ?>">← Kembali ke Portofolio</a>

<?= $this->include('Layout/footer') ?>
