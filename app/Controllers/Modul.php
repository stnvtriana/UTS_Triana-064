<?php

namespace App\Controllers;

use App\Models\ModulModel;

class Modul extends BaseController
{
    public function index()
    {
        $model = new ModulModel();

        $data = [
            'modul' => $model->getAll()
        ];

        return view('portofolio', $data);
    }

    public function detail($id)
    {
        $model = new ModulModel();
        $modul = $model->getById((int) $id);

        if ($modul === null) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        return view($modul['view']);
    }
}
