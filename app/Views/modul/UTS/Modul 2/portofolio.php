
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio</title>

    <style>
        body {
            background-color: rgb(214, 117, 117);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            padding: 40px;
        }

        .container {
            display: flex;
            justify-content: center;
            gap: 25px;
            flex-wrap: wrap;
            color: #633b3b;
        }

        .card {
            background-color: #e3d3cb;
            width: 400px;
            padding: 30px;
            border-radius: 20px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
            color: #633b3b;
            font-weight: bold;
        }

        h2 {
            margin-top: 0;
            color: #5d5d5d;
            border-bottom: 2px solid #fff;
            padding-bottom: 15px;
            font-size: 1.3em;
            margin-bottom: 20px;
        }

        .info-row {
            display: flex;
            margin-bottom: 12px;
            line-height: 1.6;
        }

        .card a {
            text-decoration: none;
            color: #633b3b;
            transition: color 0.3s;
        }

        .card a:hover {
            color: #b56d6d;
            text-decoration: underline;
        }

        #div {
            background-color: rgb(227, 211, 203);
            width: 100px;
            height: 35px;
            text-align: center;
            border-radius: 5px;
            margin: 50px auto;
            padding-top: 8px;
        }

        #a {
            text-decoration: none;
            color: rgb(131, 60, 60);
            font-size: 20px;
            font-weight: bold;
        }
    </style>
</head>

<body>

    <div class="container">

        <!-- MODUL 1 -->
        <div class="card">
            <h2>Modul 1</h2>

            <div class="info-row">
                <span><a href="<?= site_url('modul/1') ?>">index.html</a></span>
            </div>

            <div class="info-row">
                <span><a href="<?= site_url('modul1/prak1_triana') ?>">Prak1</a></span>
            </div>

            <div class="info-row">
                <span><a href="<?= site_url('modul1/prak2_triana') ?>">Prak2</a></span>
            </div>

            <div class="info-row">
                <span><a href="<?= site_url('modul1/prak3_triana') ?>">Prak3</a></span>
            </div>

            <div class="info-row">
                <span><a href="<?= site_url('modul1/tugas_triana') ?>">Tugas</a></span>
            </div>
        </div>

        <!-- MODUL 2 -->
        <div class="card">
            <h2>Modul 2</h2>

            <div class="info-row">
                <span><a href="<?= site_url('modul2/beranda') ?>">Beranda</a></span>
            </div>

            <div class="info-row">
                <span><a href="<?= site_url('modul2/profil') ?>">Profil</a></span>
            </div>

            <div class="info-row">
                <span><a href="<?= site_url('modul2/portofolio') ?>">Portofolio</a></span>
            </div>

            <div class="info-row">
                <span><a href="<?= site_url('modul2/selector') ?>">Selector</a></span>
            </div>

            <div class="info-row">
                <span><a href="<?= site_url('modul2/margin') ?>">Margin</a></span>
            </div>

            <div class="info-row">
                <span><a href="<?= site_url('modul2/padding') ?>">Padding</a></span>
            </div>

            <div class="info-row">
                <span><a href="<?= site_url('modul2/border') ?>">Border</a></span>
            </div>

            <div class="info-row">
                <span><a href="<?= site_url('modul2/background') ?>">Background</a></span>
            </div>

            <div class="info-row">
                <span><a href="<?= site_url('modul2/background-image') ?>">Background Image</a></span>
            </div>

            <div class="info-row">
                <span><a href="<?= site_url('modul2/background-repeat') ?>">Background Repeat</a></span>
            </div>

            <div class="info-row">
                <span><a href="<?= site_url('modul2/background-position') ?>">Background Position</a></span>
            </div>

            <div class="info-row">
                <span><a href="<?= site_url('modul2/background-attachment') ?>">Background Attachment</a></span>
            </div>

            <div class="info-row">
                <span><a href="<?= site_url('modul2/positioning-static') ?>">Positioning Static</a></span>
            </div>

            <div class="info-row">
                <span><a href="<?= site_url('modul2/positioning-relative') ?>">Positioning Relative</a></span>
            </div>

            <div class="info-row">
                <span><a href="<?= site_url('modul2/positioning-absolut') ?>">Positioning Absolut</a></span>
            </div>

        </div>
    </div>

    <div id="div">
        <a id="a" href="<?= site_url('modul2/beranda') ?>">Back</a>
    </div>

</body>
</html>
