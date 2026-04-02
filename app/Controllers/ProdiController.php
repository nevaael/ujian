<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

use App\Models\ProdiModel;

class ProdiController extends BaseController
{
    public function index()
{
    $dataProdi = new ProdiModel();
    $data['prodi'] = $dataProdi->findAll();

    return view('v_prodi', $data);
}

    public function simpandata()
    {
        $data = [
            'kode_prodi' => $this->request->getVar('kode_prodi'),
            'prodi' => $this->request->getVar('prodi'),
            'kode_jur' => $this->request->getVar('kode_jur')
        ];

        $rules = [
            'kode_prodi' => 'required|is_unique[tbl_prodi.kode_prodi]|max_length[3]',
            'prodi'  => 'required'
        ];

        $data = $this->request->getPost(array_keys($rules));
        if (!$this->validateData($data, $rules)) {
            return redirect()->to(base_url('/prodi'))->withInput()
                ->with('errors', $this->validator->getErrors());
        }

        $dataProdi = new ProdiModel();
        $dataProdi->save($data);

        if ($dataProdi) {
            return redirect()->to(base_url('prodi'));
        }
    }
    
}
