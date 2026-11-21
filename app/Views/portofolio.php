<?= $this->include('Layout/header', ['title' => 'Portofolio']) ?>

<section class="page-heading">
    <p class="eyebrow">HASIL PEMBELAJARAN</p>
    <h1>Portofolio Modul</h1>
    <p>Berikut beberapa modul yang saya pelajari selama perkuliahan. Pilih modul untuk membuka halamannya.</p>
</section>

<div class="row g-3">
    <?php foreach ($modul as $item): ?>
        <div class="col-sm-6 col-lg-4">
            <a class="module-card" href="<?= site_url('modul/' . $item['id']) ?>">
                <span class="module-icon">▤</span>
                <span>
                    <strong><?= esc($item['nama']) ?></strong>
                    <small><?= esc($item['deskripsi']) ?></small>
                </span>
            </a>
        </div>
    <?php endforeach; ?>
</div>

<a class="btn btn-maroon mt-4" href="<?= site_url('home') ?>">
    ← Kembali ke Home
</a>

<?= $this->include('Layout/footer') ?>
