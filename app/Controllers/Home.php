<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('login');
    }

    public function login()
    {
        return view('login');
    }

    public function home()
    {
        return view('Home/index');
    }

    public function about()
    {
        return view('about');
    }

    public function profil()
    {
        return view('profil');
    }

    public function portofolio()
    {
        return redirect()->to(site_url('portofolio'));
    }

    public function proses()
    {
        $nama = $this->request->getPost('nama');
        $password = $this->request->getPost('password');

        if (empty($nama) || empty($password)) {
            return redirect()->to(site_url('login'));
        }

        return redirect()->to(site_url('home'));
    }

    // =============================
    // MODUL 1
    // =============================
    public function modul1Home()
    {
        return view('modul/UTS/Modul 1/index');
    }

    public function modul1Portofolio()
    {
        return view('modul/UTS/Modul 1/prak3_triana');
    }

    public function prak1()
    {
        return view('modul/UTS/Modul 1/prak1_triana');
    }

    public function prak2()
    {
        return view('modul/UTS/Modul 1/prak2_triana');
    }

    public function prak3()
    {
        return view('modul/UTS/Modul 1/prak3_triana');
    }

    public function tugas()
    {
        return view('modul/UTS/Modul 1/tugas_triana');
    }

    // =============================
    // MODUL 2
    // =============================
    public function modul2Profil()
    {
        return view('modul/UTS/Modul 2/profil');
    }

    public function modul2Portofolio()
    {
        return view('modul/UTS/Modul 2/portofolio');
    }

    public function modul2Beranda()
    {
        return view('modul/UTS/Modul 2/Beranda');
    }

    public function modul2Selector()
    {
        return view('modul/UTS/Modul 2/selector');
    }

    public function modul2Margin()
    {
        return view('modul/UTS/Modul 2/margin');
    }

    public function modul2Padding()
    {
        return view('modul/UTS/Modul 2/padding');
    }

    public function modul2Border()
    {
        return view('modul/UTS/Modul 2/border');
    }

    public function modul2Background()
    {
        return view('modul/UTS/Modul 2/background');
    }

    public function modul2BackgroundImage()
    {
        return view('modul/UTS/Modul 2/background-image');
    }

    public function modul2BackgroundRepeat()
    {
        return view('modul/UTS/Modul 2/background-repeat');
    }

    public function modul2BackgroundPosition()
    {
        return view('modul/UTS/Modul 2/background-position');
    }

    public function modul2BackgroundAttachment()
    {
        return view('modul/UTS/Modul 2/background-attachment');
    }

    public function modul2PositioningStatic()
    {
        return view('modul/UTS/Modul 2/positioning.static');
    }

    public function modul2PositioningRelative()
    {
        return view('modul/UTS/Modul 2/positioning.relative');
    }

    public function modul2PositioningAbsolut()
    {
        return view('modul/UTS/Modul 2/positioning.absolut');
    }

    public function modul2Index()
    {
        return view('modul/UTS/Modul 2/index');
    }

    // =============================
    // MODUL 3
    // =============================
    public function modul3()
    {
        return view('modul3');
    }

    public function modul3Biodata()
    {
        return view('modul/UTS/Modul 3/biodata');
    }

    public function modul3Kerucut()
    {
        return view('modul/UTS/Modul 3/kerucut');
    }

    public function modul3Ketiga()
    {
        return view('modul/UTS/Modul 3/ketiga');
    }

    public function modul3Php()
    {
        return view('modul/UTS/Modul 3/php');
    }

    public function modul3Tugas()
    {
        return view('modul/UTS/Modul 3/tugas');
    }

    // =============================
    // MODUL 5
    // =============================
    public function modul5()
    {
        return view('modul5');
    }

    public function perulangan()
    {
        return view('modul/UTS/Modul 5/perulangan');
    }

    public function perulangan2()
    {
        return view('modul/UTS/Modul 5/perulangan2');
    }

    public function perulangan4()
    {
        return view('modul/UTS/Modul 5/perulangan4');
    }

    public function perulangan5()
    {
        return view('modul/UTS/Modul 5/perulangan5');
    }

    public function perulangan6()
    {
        return view('modul/UTS/Modul 5/perulangan6');
    }

    public function perulangan7()
    {
        return view('modul/UTS/Modul 5/perulangan7');
    }

    public function tugasPerulangan()
    {
        return view('modul/UTS/Modul 5/tugasPerulangan');
    }

    public function tugasPerulangan2()
    {
        return view('modul/UTS/Modul 5/tugasPerulangan2');
    }

    public function tugasPerulangan3()
    {
        return view('modul/UTS/Modul 5/tugasPerulangan3');
    }

    // =============================
    // MODUL 6
    // =============================
    public function modul6()
    {
        return view('modul6');
    }

    public function array1()
    {
        return view('modul/UTS/Modul 6/array1');
    }

    public function array2()
    {
        return view('modul/UTS/Modul 6/array2');
    }

    public function array3()
    {
        return view('modul/UTS/Modul 6/array3');
    }

    public function tugasArray1()
    {
        return view('modul/UTS/Modul 6/tugasArray1');
    }

    public function tugasArray2()
    {
        return view('modul/UTS/Modul 6/tugasArray2');
    }

    // =============================
    // MODUL 7
    // =============================
    public function modul7()
    {
        return view('modul7');
    }

    public function form_text()
    {
        return view('modul/UTS/Modul 7/form_text');
    }

    public function login7()
    {
        return view('modul/UTS/Modul 7/login');
    }

    public function simpanLogin()
    {
        $nama = $this->request->getPost('nama');
        $password = $this->request->getPost('password');

        $berhasil = ($nama === 'ana' && $password === '12345678');

        return view('modul/UTS/Modul 7/simpan_login', [
            'berhasil' => $berhasil,
            'nama' => $nama
        ]);
    }

    public function simpan()
    {
        $data = [
            'nama' => $this->request->getPost('nama'),
            'tempat' => $this->request->getPost('tempat'),
            'tgl' => $this->request->getPost('tgl'),
            'jk' => $this->request->getPost('jk'),
            'agama' => $this->request->getPost('agama'),
            'alamat' => $this->request->getPost('alamat'),
            'hobi' => [
                $this->request->getPost('hobi1'),
                $this->request->getPost('hobi2'),
                $this->request->getPost('hobi3'),
                $this->request->getPost('hobi4'),
                $this->request->getPost('hobi5')
            ],
            'fileName' => null,
            'uploadError' => null
        ];

        $file = $this->request->getFile('file');

        if ($file && $file->isValid() && !$file->hasMoved()) {
            $folder = FCPATH . 'uploads/modul7';

            if (!is_dir($folder)) {
                mkdir($folder, 0775, true);
            }

            $fileName = $file->getRandomName();
            if ($file->move($folder, $fileName)) {
                $data['fileName'] = $fileName;
            } else {
                $data['uploadError'] = 'File gagal diunggah.';
            }
        }

        return view('modul/UTS/Modul 7/simpan', $data);
    }
}
