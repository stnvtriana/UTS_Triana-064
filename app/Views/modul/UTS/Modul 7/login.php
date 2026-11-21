<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Modul 7</title>
    <style>
        #login-form {
            width: 300px;
            margin: 50px auto;
            padding: 20px;
            border: 1px solid #bca972;
            background-color: #824848;
            font: 1em sans-serif;
            font-size: 18px;
            color: #f4e9e4;
            border-radius: 20px;
        }
        #login-form input[type="text"],
        #login-form input[type="password"] {
            width: 100%;
            box-sizing: border-box;
            padding: 7px;
        }
    </style>
</head>
<body>
    <div id="login-form">
        <h2>Login</h2>
        <?php if (session()->getFlashdata('error')): ?>
            <p><?= esc(session()->getFlashdata('error')) ?></p>
        <?php endif; ?>
        <form action="<?= site_url('modul7/simpan_login') ?>" method="post">
            <?= csrf_field() ?>
            Username : <input type="text" name="nama" required><br><br>
            Password : <input type="password" name="password" required><br><br>
            <input type="submit" value="Login"
                style="background-color:#b7a79c;color:#824848;border:0;border-radius:4px;padding:8px 15px;cursor:pointer;width:100%;font-weight:bold;">
        </form>
        <p><a href="<?= site_url('modul7') ?>" style="color:#fff;">Kembali ke Modul 7</a></p>
    </div>
</body>
</html>
