<?= $this->include('Layout/header', ['title' => 'Modul 7']) ?>

<section class="page-heading">
    <p class="eyebrow">HASIL PEMBELAJARAN</p>
    <h1>Modul 7</h1>
    <p>Silakan pilih latihan yang ingin dibuka.</p>
</section>

<div class="row g-3">
    <div class="col-sm-6 col-lg-4">
        <a href="<?= site_url('modul7/form_text') ?>" class="module-card"><strong>Form Text</strong></a>
    </div>
    <div class="col-sm-6 col-lg-4">
        <a href="<?= site_url('modul7/login') ?>" class="module-card"><strong>Login</strong></a>
    </div>
    <div class="col-sm-6 col-lg-4">
        <div class="module-card">
            <strong>Simpan Login</strong>
            <small>Diproses setelah formulir Login dikirim.</small>
        </div>
    </div>
    <div class="col-sm-6 col-lg-4">
        <div class="module-card">
            <strong>Simpan</strong>
            <small>Diproses setelah Form Text dikirim.</small>
        </div>
    </div>
</div>

<a class="btn btn-maroon mt-4" href="<?= site_url('portofolio') ?>">← Kembali ke Portofolio</a>

<?= $this->include('Layout/footer') ?>
