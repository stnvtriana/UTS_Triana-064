
<?= $this->extend('Layout/main') ?>

<?= $this->section('content') ?>

<section class="content-panel">
    <p class="eyebrow">TENTANG SAYA</p>

    <h1>About Me</h1>

    <p>
        Perkenalkan, nama saya Siti Novi Triana. Saya lahir di Nganjuk,
        Jawa Timur, pada 24 November 2005.
        Saya anak keempat dari lima bersaudara. Hobi saya memasak,
        mendengarkan musik, dan bermain game online.
        Saya tinggal di daerah Tanjunganom, Nganjuk.
    </p>

    <p>
        Saya adalah mahasiswa Sistem Informasi di Institut Teknologi Mojosari.
        Saya senang mempelajari hal-hal baru dan terus berusaha meningkatkan
        keterampilan dalam pemrograman serta desain web.
    </p>

    <p>
        Saat ini saya berada di semester 4. Saya berharap dapat menyelesaikan
        studi dengan baik dan mendapatkan pengalaman yang bermanfaat selama
        masa perkuliahan.
    </p>

    <p>
        Dengan membuat website ini, saya belajar mengubah tampilan sederhana
        menjadi lebih menarik sekaligus menambah pengetahuan tentang
        pemrograman web.
    </p>

    <p class="mb-0">Terima kasih telah membaca tentang saya!</p>
</section>

<a class="btn btn-maroon mt-3" href="<?= site_url('home') ?>">
    ← Kembali ke Home
</a>

<?= $this->endSection() ?>
