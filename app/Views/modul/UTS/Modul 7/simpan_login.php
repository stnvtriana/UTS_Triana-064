<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Login</title>
</head>
<body>
    <?php if ($berhasil): ?>
        <h2>Login Berhasil!</h2>
        <p>Username: <?= esc($nama) ?></p>
    <?php else: ?>
        <h2>Login Gagal!</h2>
        <p>Username atau Password yang Anda masukkan salah.</p>
    <?php endif; ?>

    <a href="<?= site_url('modul7/login') ?>">Kembali ke Halaman Login</a>
</body>
</html>
