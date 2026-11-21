
<?= $this->include('layout/header', ['title' => 'Modul 3']) ?>

<section class="page-heading">
    <p class="eyebrow">HASIL PEMBELAJARAN</p>
    <h1>Modul 3</h1>
    <p>Silakan pilih latihan yang ingin dibuka.</p>
</section>

<div class="row g-3">

    <div class="col-sm-6 col-lg-4">
        <a href="<?= site_url('modul3/biodata') ?>" class="module-card">
            <strong>Biodata</strong>
        </a>
    </div>

    <div class="col-sm-6 col-lg-4">
        <a href="<?= site_url('modul3/kerucut') ?>" class="module-card">
            <strong>Kerucut</strong>
        </a>
    </div>

    <div class="col-sm-6 col-lg-4">
        <a href="<?= site_url('modul3/ketiga') ?>" class="module-card">
            <strong>Ketiga</strong>
        </a>
    </div>

    <div class="col-sm-6 col-lg-4">
        <a href="<?= site_url('modul3/php') ?>" class="module-card">
            <strong>PHP</strong>
        </a>
    </div>

    <div class="col-sm-6 col-lg-4">
        <a href="<?= site_url('modul3/tugas') ?>" class="module-card">
            <strong>Tugas</strong>
        </a>
    </div>

</div>

<a class="btn btn-maroon mt-4" href="<?= site_url('portofolio') ?>">
    ← Kembali ke Portofolio
</a>

<?= $this->include('Layout/footer') ?>
