<?php

namespace App\Controllers\Admin;

use App\Models\JabatanModel;
use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Jabatan extends BaseController
{
    public function index()
    {
        $jabatanModel = new JabatanModel();
        $data = [
            'title' => 'Data Jabatan',
            'jabatan' => $jabatanModel->findAll()
        ];

        return view('admin/jabatan/jabatan', $data);
    }
    public function create()
    {
        $data = [
            'title' => 'Tambah Jabatan',
            'validation' => \Config\Services::validation()
        ];
        return view('admin/jabatan/create', $data);
    }
    public function store()
    {
        $rules = [
            'jabatan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Jabatan tidak boleh kosong'
                ]
            ]
        ];
        if (!$this->validate($rules)) {
            $data = [
                'title' => 'Tambah Jabatan',
                'validation' => \Config\Services::validation()
            ];
            echo view('admin/jabatan/create', $data);
        } else {
            $jabatanModel = new JabatanModel();
            $jabatanModel->insert([
                'jabatan' => $this->request->getPost('jabatan')
            ]);
            session()->setFlashdata('berhasil', 'Data berhasil  ditambahkan');
            return redirect()->to(base_url('/admin/jabatan'));
        }
    }
    public function edit($id)
    {
        $jabatanModel = new JabatanModel();
        $data = [
            'title' => 'Edit Jabatan',
            'jabatan' => $jabatanModel->find($id),
            'validation' => \Config\Services::validation()
        ];
        return view('admin/jabatan/edit', $data);
    }
    public function update($id)
    {
        $jabatanModel = new JabatanModel();
        $rules = [
            'jabatan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Jabatan tidak boleh kosong'
                ]
            ]
        ];
        if (!$this->validate($rules)) {
            $data = [
                'title' => 'Edit Jabatan',
                'jabatan' => $jabatanModel->find($id),
                'validation' => \Config\Services::validation()
            ];
            echo view('admin/jabatan/edit', $data);
        } else {
            $jabatanModel = new JabatanModel();
            $jabatanModel->update($id, [
                'jabatan' => $this->request->getPost('jabatan')
            ]);
            session()->setFlashdata('berhasil', 'Data berhasil diupdate');
            return redirect()->to(base_url('/admin/jabatan'));
        }
    }
    function delete($id){
        $jabatanModel = new JabatanModel();
        $jabatan = $jabatanModel->find($id);
        if($jabatan){
            $jabatanModel->delete($id);
            session()->setFlashdata('berhasil', 'Data berhasil dihapus');
            return redirect()->to(base_url('/admin/jabatan'));
        }
    }
}
