<?php

namespace App\Models;

class ModulModel
{
    // Daftar modul yang ditampilkan pada halaman Portofolio.
    public function getAll()
    {
        return [
            [
                'id' => 1,
                'nama' => 'Modul 1',
                'deskripsi' => 'Praktikum HTML dan dasar pembuatan website'
            ],
            [
                'id' => 2,
                'nama' => 'Modul 2',
                'deskripsi' => 'Praktikum CSS dan pengaturan tampilan website'
            ],
            [
                'id' => 3,
                'nama' => 'Modul 3',
                'deskripsi' => 'Latihan PHP'
            ],
            [
                'id' => 5,
                'nama' => 'Modul 5',
                'deskripsi' => 'Latihan perulangan'
            ],
            [
                'id' => 6,
                'nama' => 'Modul 6',
                'deskripsi' => 'Latihan array'
            ],
            [
                'id' => 7,
                'nama' => 'Modul 7',
                'deskripsi' => 'Latihan form dan login'
            ]
        ];
    }

    // Menentukan halaman menu yang dibuka berdasarkan nomor modul.
    public function getById($id)
    {
        $halaman = [
            1 => 'modul/UTS/Modul 1/index',
            2 => 'modul/UTS/Modul 2/Beranda',
            3 => 'modul3',
            5 => 'modul5',
            6 => 'modul6',
            7 => 'modul7'
        ];

        if (!isset($halaman[$id])) {
            return null;
        }

        return [
            'id' => $id,
            'view' => $halaman[$id]
        ];
    }
}
