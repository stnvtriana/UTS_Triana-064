<?= $this->include('layout/header', ['title' => 'Login']) ?>
<section class="login-panel">
    <p class="eyebrow text-center">AREA LOGIN</p>
    <h1 class="text-center">Login</h1>
    <p class="text-center text-muted">Silakan masukkan username dan password.</p>
    <form action="<?= site_url('login/proses') ?>" method="post">
        <?= csrf_field() ?>
        <div class="mb-3">
            <label class="form-label" for="nama">Username</label>
            <input class="form-control" type="text" id="nama" name="nama" value="<?= old('nama') ?>" required>
        </div>
        <div class="mb-3">
            <label class="form-label" for="password">Password</label>
            <input class="form-control" type="password" id="password" name="password" required>
        </div>
        <button class="btn btn-maroon w-100" type="submit">Login</button>
    </form>
    <a class="back-link" href="<?= site_url('/') ?>">← Kembali ke Home</a>
</section>
<?= $this->include('Layout/footer') ?>
