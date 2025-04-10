<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class biodata extends BaseController
{
    public function index()
    {
        //
    }

    public function biodata()  {
        return view('biodata.php');
    }

    public function dataBiodata($nama, $ttl, $alamat, $notlp, $kelamin ,$pendidikan)
    {
        echo "Nama  : $nama <br/>";
        echo "Tempat, Tanggal lahir: $ttl <br/>";
        echo "Alamat: $alamat <br/>";
        echo "Nomor Handphone: $notlp <br/>";
        echo "Kelamin: $kelamin <br/>";
        echo "Pendidikan: $pendidikan <br/>";

    }
}