<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

use App\Models\JurusanModel;

class JurusanController extends BaseController
{
    public function index()
    {
        $dataJurusan = new JurusanModel();
        $data['data'] = $dataJurusan->findAll();

        return view('v_jurusan', $data);
    }

    public function simpandata()
    {
        $data = [
            'kode_jur' => $this->request->getVar('kode_jur'),
            'jurusan' => $this->request->getVar('jurusan')
        ];

        $rules = [
            'kode_jur' => 'required|is_unique[tbl_jurusan.kode_jur]|max_length[3]',
            'jurusan'  => 'required'
        ];

        $data = $this->request->getPost(array_keys($rules));
        if (!$this->validateData($data, $rules)) {
            return redirect()->to(base_url('/jurusan'))->withInput()
                ->with('errors', $this->validator->getErrors());
        }

        $dataJurusan = new JurusanModel();
        $dataJurusan->save($data);

        if ($dataJurusan) {
            return redirect()->to(base_url('jurusan'));
        }
    }
}