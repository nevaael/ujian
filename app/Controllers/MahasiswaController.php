<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class MahasiswaController extends BaseController
{
    public function index()
    {
        helper(['form', 'validation']);
        return view ('frm_bio');
    }

    public function savebiodata(){
        $rules = [
            'fnim' => 'required|min_length[10]',
            'fnama' => 'required|max_length[50]',
            'falamat' => 'required |max_length[100]',
        ];

        $data = $this->request->getPost(array_keys($rules));

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput();
        }

        echo "Biodata Mahasiswa";
        echo '<br> Nim :' .$this->request->getVar('fnim');
        echo '<br> Nama :'.$this->request->getVar('fnama');
        echo '<br> Alamat :'.$this->request->getVar('falamat');
    }
}