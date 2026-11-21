<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Form</title>
</head>
<body>
    <h2>Data Berhasil Dikirim</h2>
    <p>Nama: <?= esc($nama ?? '') ?></p>
    <p>Tempat Lahir: <?= esc($tempat ?? '') ?></p>
    <p>Tanggal Lahir: <?= esc($tgl ?? '') ?></p>
    <p>Jenis Kelamin: <?= esc($jk ?? '') ?></p>
    <p>Agama: <?= esc($agama ?? '') ?></p>
    <p>Alamat: <?= nl2br(esc($alamat ?? '')) ?></p>

    <p>Hobi:</p>
    <?php foreach (($hobi ?? []) as $item): ?>
        <?php if (!empty($item)): ?>
            <p>~ <?= esc($item) ?></p>
        <?php endif; ?>
    <?php endforeach; ?>

    <?php if (!empty($fileName)): ?>
        <p>File berhasil diunggah.</p>
        <p><a href="<?= base_url('uploads/modul7/' . rawurlencode($fileName)) ?>" target="_blank">Lihat file yang diunggah</a></p>
    <?php elseif (!empty($uploadError)): ?>
        <p><?= esc($uploadError) ?></p>
    <?php else: ?>
        <p>Tidak ada foto yang diunggah.</p>
    <?php endif; ?>

    <a href="<?= site_url('modul7/form_text') ?>">Kembali ke Form</a>
</body>
</html>
