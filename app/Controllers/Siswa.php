<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Siswa extends BaseController
{
    public function index()
    {
        //
    }

    public function profil()  {
        return view('profil');
    }

    public function dataSiswa($nama, $umur)
    {
        echo "Nama Siswa : $nama <br/>";
        echo "Umur: $umur";
    }
}