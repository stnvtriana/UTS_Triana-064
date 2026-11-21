<?= $this->extend('Layout/main') ?>
<?= $this->section('content') ?>

<section class="hero-section">
    <div class="hero-copy">
        <p class="eyebrow">WEBSITE PRIBADI</p>
        <h1>Selamat Datang di<br>Website Saya</h1>
        
    </div>
    <div class="hero-photo" role="img" aria-label="Meja belajar dengan laptop dan buku"></div>
</section>

<section class="intro-strip row g-0 align-items-center my-4">
    <div class="col-md-6 intro-cell">
        <span class="intro-symbol">✦</span>
        <p>Menampilkan projek yang sudah saya kerjakan selama belajar web development. <br>
            Dengan Bootstrap, saya belajar membuat tampilan yang responsif dan menarik.</p>
    </div>
    <div class="col-md-6 intro-cell">
        <span class="intro-symbol">✦</span>
        <p>Saya menggunakan komponen seperti card, carousel, dan grid system untuk <br>
            menyusun konten agar lebih terstruktur dan mudah dibaca.</p>
    </div>
</section>

<section class="row g-3">
    <div class="col-md-4">
        <article class="feature-card">
            <div class="feature-art profile-art" aria-hidden="true">SN</div>
            <div>
                <h2>Profil Saya</h2>
                <p>Kenali lebih dekat tentang saya melalui halaman profil.</p>
                <a class="btn btn-maroon" href="<?= site_url('profil') ?>">Lihat Profil →</a>
            </div>
        </article>
    </div>
    <div class="col-md-4">
        <article class="feature-card">
            <div class="feature-art folder-art" aria-hidden="true">▤</div>
            <div>
                <h2>Portofolio</h2>
                <p>Kumpulan modul dan projek yang pernah saya buat.</p>
                <a class="btn btn-maroon" href="<?= site_url('portofolio') ?>">Lihat Portofolio →</a>
            </div>
        </article>
    </div>
    <div class="col-md-4">
        <article class="feature-card">
            <div class="feature-art lock-art" aria-hidden="true">▣</div>
            <div>
                <h2>Login</h2>
                <p>Masuk untuk mencoba halaman login sederhana.</p>
                <a class="btn btn-maroon" href="<?= site_url('login') ?>">Login Sekarang →</a>
            </div>
        </article>
    </div>

    <div class="col-md-6 col-lg-3">
    <div class="feature-card">
        <div class="feature-icon">✦</div>
        <h2>About Me</h2>
        <p>Kenali lebih jauh tentang diri dan perjalanan belajar saya.</p>
        <a href="<?= site_url('about') ?>" class="btn btn-maroon">
            Tentang Saya →
        </a>
    </div>
</div>
</section>

<?= $this->endSection() ?>
