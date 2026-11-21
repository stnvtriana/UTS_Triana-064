
<?= $this->include('layout/header', ['title' => 'Modul 6']) ?>

<section class="page-heading">
    <p class="eyebrow">HASIL PEMBELAJARAN</p>
    <h1>Modul 6</h1>
    <p>Silakan pilih latihan yang ingin dibuka.</p>
</section>

<div class="row g-3">

    <div class="col-sm-6 col-lg-4">
        <a href="<?= site_url('modul6/array1') ?>" class="module-card">
            <strong>Array 1</strong>
        </a>
    </div>

    <div class="col-sm-6 col-lg-4">
        <a href="<?= site_url('modul6/array2') ?>" class="module-card">
            <strong>Array 2</strong>
        </a>
    </div>

    <div class="col-sm-6 col-lg-4">
        <a href="<?= site_url('modul6/array3') ?>" class="module-card">
            <strong>Array 3</strong>
        </a>
    </div>

    <div class="col-sm-6 col-lg-4">
        <a href="<?= site_url('modul6/tugasArray1') ?>" class="module-card">
            <strong>Tugas Array 1</strong>
        </a>
    </div>

    <div class="col-sm-6 col-lg-4">
        <a href="<?= site_url('modul6/tugasArray2') ?>" class="module-card">
            <strong>Tugas Array 2</strong>
        </a>
    </div>

</div>

<a class="btn btn-maroon mt-4" href="<?= site_url('portofolio') ?>">
    ← Kembali ke Portofolio
</a>

<?= $this->include('Layout/footer') ?>
