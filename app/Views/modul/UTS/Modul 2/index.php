```php
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modul 2 - Siti Novi Triana</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f8f3ef;
            margin: 0;
            padding: 30px;
        }

        .container {
            max-width: 900px;
            margin: auto;
        }

        h1 {
            color: #692923;
            text-align: center;
        }

        .daftar {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 15px;
        }

        .daftar a {
            background: white;
            padding: 20px;
            border-radius: 12px;
            color: #692923;
            text-decoration: none;
            box-shadow: 0 3px 10px #ddd;
        }

        .daftar a:hover {
            background: #e9d8d0;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Portofolio Modul 2</h1>
    <p>Pilih tugas yang ingin dilihat:</p>

    <div class="daftar">
        <?php
        $tugas = [
            'Beranda',
            'border',
            'margin',
            'padding',
            'portofolio',
            'profil',
            'selector'
        ];

        foreach ($tugas as $nama):
        ?>
            <a href="#">
                <?= esc($nama) ?> →
            </a>
        <?php endforeach; ?>
    </div>
</div>

</body>
</html>