<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class RegisterController extends Controller
{
    public function index()
    {
        helper(['form']);
        return view('register');
    }

    public function submit()
    {
        helper(['form']);
        $validation = \Config\Services::validation();

        $rules = [
            'nama' => 'required|min_length[3]',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'alamat' => 'required',
            'telepon' => 'required|numeric|min_length[10]',
            'jenis_kelamin' => 'required',
            'pendidikan' => 'required'
        ];

        $messages = [
            'nama' => [
                'required' => 'Nama harus diisi',
                'min_length' => 'Nama minimal 3 karakter'
            ],
            'telepon' => [
                'required' => 'Nomor telepon harus diisi',
                'numeric' => 'Nomor telepon harus berupa angka',
                'min_length' => 'Nomor telepon minimal 10 digit'
            ]
        ];

        if (!$this->validate($rules, $messages)) {
            return $this->response->setJSON([
                'success' => false,
                'errors' => $validation->getErrors()
            ]);
        }

        $data = [
            'nama' => $this->request->getPost('nama'),
            'tempat_lahir' => $this->request->getPost('tempat_lahir'),
            'tanggal_lahir' => $this->request->getPost('tanggal_lahir'),
            'alamat' => $this->request->getPost('alamat'),
            'telepon' => $this->request->getPost('telepon'),
            'jenis_kelamin' => $this->request->getPost('jenis_kelamin'),
            'pendidikan' => $this->request->getPost('pendidikan')
        ];

        return $this->response->setJSON([
            'success' => true,
            'data' => $data
        ]);
    }
}
