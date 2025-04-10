<?php 
 
namespace App\Controllers; 
 
use App\Controllers\BaseController; 
 
class Modul extends BaseController 
{ 
    public function index() 
    { 
        return view('form_modul'); 
    } 
    public function save() 
    { 
        if (!$this->validate([ 
            'kode' => [ 
                'rules' => 'required', 
                'errors' => [ 
                    'required' => '{field} Harus diisi' 
                ] 
            ], 
            'modul' => [ 
                'rules' => 'required', 
                'errors' => [ 
                    'required' => '{field} Harus diisi' 
                ] 
            ], 
            'sks' => [ 
                'rules' => 'required|greater_than[0]|less_than[10]', 
                'errors' => [ 
                    'required' => '{field} Harus diisi' 
                ] 
            ] 
])) { 
    session()->setFlashdata('error', $this->validator->listErrors()); 
    return redirect()->back()->withInput(); 
} else { 
         print_r($this->request->getVar()); 
        } 
    } 
}