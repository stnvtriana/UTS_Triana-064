<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */

// HALAMAN UTAMA WEBSITE
$routes->get('/', 'Home::index');
$routes->get('login', 'Home::login');
$routes->get('home', 'Home::home');
$routes->get('about', 'Home::about');
$routes->get('profil', 'Home::profil');
$routes->post('login/proses', 'Home::proses');

// PORTOFOLIO DAN HALAMAN MENU MODUL
$routes->get('portofolio', 'Modul::index');
$routes->get('modul/(:num)', 'Modul::detail/$1');

// MODUL 1
$routes->get('modul1/home', 'Home::modul1Home');
$routes->get('modul1/portofolio', 'Home::modul1Portofolio');
$routes->get('modul1/prak1_triana', 'Home::prak1');
$routes->get('modul1/prak2_triana', 'Home::prak2');
$routes->get('modul1/prak3_triana', 'Home::prak3');
$routes->get('modul1/tugas_triana', 'Home::tugas');

// MODUL 2
$routes->get('modul2/profil', 'Home::modul2Profil');
$routes->get('modul2/portofolio', 'Home::modul2Portofolio');
$routes->get('modul2/beranda', 'Home::modul2Beranda');
$routes->get('modul2/selector', 'Home::modul2Selector');
$routes->get('modul2/margin', 'Home::modul2Margin');
$routes->get('modul2/padding', 'Home::modul2Padding');
$routes->get('modul2/border', 'Home::modul2Border');
$routes->get('modul2/background', 'Home::modul2Background');
$routes->get('modul2/background-image', 'Home::modul2BackgroundImage');
$routes->get('modul2/background-repeat', 'Home::modul2BackgroundRepeat');
$routes->get('modul2/background-position', 'Home::modul2BackgroundPosition');
$routes->get('modul2/background-attachment', 'Home::modul2BackgroundAttachment');
$routes->get('modul2/positioning-static', 'Home::modul2PositioningStatic');
$routes->get('modul2/positioning-relative', 'Home::modul2PositioningRelative');
$routes->get('modul2/positioning-absolut', 'Home::modul2PositioningAbsolut');
$routes->get('modul2/index', 'Home::modul2Index');

// MODUL 3
$routes->get('modul3', 'Home::modul3');
$routes->get('modul3/biodata', 'Home::modul3Biodata');
$routes->get('modul3/kerucut', 'Home::modul3Kerucut');
$routes->get('modul3/ketiga', 'Home::modul3Ketiga');
$routes->get('modul3/php', 'Home::modul3Php');
$routes->get('modul3/tugas', 'Home::modul3Tugas');

// MODUL 5 (tidak membuat route perulangan3 karena file-nya tidak ada)
$routes->get('modul5', 'Home::modul5');
$routes->get('modul5/perulangan', 'Home::perulangan');
$routes->get('modul5/perulangan2', 'Home::perulangan2');
$routes->get('modul5/perulangan4', 'Home::perulangan4');
$routes->get('modul5/perulangan5', 'Home::perulangan5');
$routes->get('modul5/perulangan6', 'Home::perulangan6');
$routes->get('modul5/perulangan7', 'Home::perulangan7');
$routes->get('modul5/tugasPerulangan', 'Home::tugasPerulangan');
$routes->get('modul5/tugasPerulangan2', 'Home::tugasPerulangan2');
$routes->get('modul5/tugasPerulangan3', 'Home::tugasPerulangan3');

// MODUL 6
$routes->get('modul6', 'Home::modul6');
$routes->get('modul6/array1', 'Home::array1');
$routes->get('modul6/array2', 'Home::array2');
$routes->get('modul6/array3', 'Home::array3');
$routes->get('modul6/tugasArray1', 'Home::tugasArray1');
$routes->get('modul6/tugasArray2', 'Home::tugasArray2');

// MODUL 7
$routes->get('modul7', 'Home::modul7');
$routes->get('modul7/form_text', 'Home::form_text');
$routes->get('modul7/login', 'Home::login7');
$routes->post('modul7/simpan_login', 'Home::simpanLogin');
$routes->post('modul7/simpan', 'Home::simpan');
