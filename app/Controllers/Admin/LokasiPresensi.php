<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\LokasiPresensiModel;

class LokasiPresensi extends BaseController
{
    public function index()
    {
        $lokasiPresensiModel = new LokasiPresensiModel();
        $data = [
            'title' => 'Data Lokasi Presensi',
            'lokasi_presensi' => $lokasiPresensiModel->findAll()
        ];

        return view('admin/lokasi_presensi/lokasi_presensi', $data);
    }
    public function detail($id)
    {
        $lokasiPresensiModel = new LokasiPresensiModel();
        $data = [
            'title' => 'Detail Lokasi Presensi',
            'lokasi_presensi' => $lokasiPresensiModel->find($id)
        ];

        return view('admin/lokasi_presensi/detail', $data);
    }
    public function create()
    {
        $data = [
            'title' => 'Tambah Lokasi Presensi',
            'validation' => \Config\Services::validation()
        ];
        return view('admin/lokasi_presensi/create', $data);
    }

    public function store()
    {
        $rules = [
            'nama_lokasi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama Lokasi tidak boleh kosong'
                ]
            ],
            'alamat_lokasi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Alamat Lokasi tidak boleh kosong'
                ]
            ],
            'tipe_lokasi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Tipe Lokasi tidak boleh kosong'
                ]
            ],
            'latitude' => [
                'rules' => 'required|decimal',
                'errors' => [
                    'required' => 'Latitude tidak boleh kosong',
                    'decimal' => 'Latitude harus berupa angka desimal'
                ]
            ],
            'longitude' => [
                'rules' => 'required|decimal',
                'errors' => [
                    'required' => 'Longitude tidak boleh kosong',
                    'decimal' => 'Longitude harus berupa angka desimal'
                ]
            ],
            'radius' => [
                'rules' => 'required|integer',
                'errors' => [
                    'required' => 'Radius tidak boleh kosong',
                    'integer' => 'Radius harus berupa angka bulat'
                ]
            ],
            'zona_waktu' => [
                'rules' => 'required|max_length[4]',
                'errors' => [
                    'required' => 'Zona Waktu tidak boleh kosong',
                    'max_length' => 'Zona Waktu tidak boleh lebih dari 4 karakter'
                ]
            ],
            'jam_masuk' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Jam Masuk tidak boleh kosong',
                    'valid_time' => 'Jam Masuk harus berupa waktu yang valid (HH:MM:SS)'
                ]
            ],
            'jam_pulang' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Jam Pulang tidak boleh kosong',
                    'valid_time' => 'Jam Pulang harus berupa waktu yang valid (HH:MM:SS)'
                ]
            ]
        ];


        if (!$this->validate($rules)) {
            $data = [
                'title' => 'Tambah Lokasi Presensi',
                'validation' => \Config\Services::validation()
            ];
            echo view('admin/lokasi_presensi/create', $data);
        } else {
            $lokasiPresensiModel = new LokasiPresensiModel();
            $lokasiPresensiModel->insert([
                'nama_lokasi' => $this->request->getPost('nama_lokasi'),
                'alamat_lokasi' => $this->request->getPost('alamat_lokasi'),
                'tipe_lokasi' => $this->request->getPost('tipe_lokasi'),
                'latitude' => $this->request->getPost('latitude'),
                'longitude' => $this->request->getPost('longitude'),
                'radius' => $this->request->getPost('radius'),
                'zona_waktu' => $this->request->getPost('zona_waktu'),
                'jam_masuk' => $this->request->getPost('jam_masuk'),
                'jam_pulang' => $this->request->getPost('jam_pulang')
            ]);
            session()->setFlashdata('berhasil', 'Data berhasil ditambahkan');
            return redirect()->to(base_url('/admin/lokasi_presensi'));
        }
    }

    public function edit($id)
    {
        $lokasiPresensiModel = new LokasiPresensiModel();
        $data = [
            'title' => 'Edit Lokasi Presensi',
            'lokasi_presensi' => $lokasiPresensiModel->find($id),
            'validation' => \Config\Services::validation()
        ];
        return view('admin/lokasi_presensi/edit', $data);
    }

    public function update($id)
    {
        $lokasiPresensiModel = new LokasiPresensiModel(); // Instantiate the model here
        $rules = [
            'nama_lokasi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama Lokasi tidak boleh kosong'
                ]
            ],
            'alamat_lokasi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Alamat Lokasi tidak boleh kosong'
                ]
            ],
            'tipe_lokasi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Tipe Lokasi tidak boleh kosong'
                ]
            ],
            'latitude' => [
                'rules' => 'required|decimal',
                'errors' => [
                    'required' => 'Latitude tidak boleh kosong',
                    'decimal' => 'Latitude harus berupa angka desimal'
                ]
            ],
            'longitude' => [
                'rules' => 'required|decimal',
                'errors' => [
                    'required' => 'Longitude tidak boleh kosong',
                    'decimal' => 'Longitude harus berupa angka desimal'
                ]
            ],
            'radius' => [
                'rules' => 'required|integer',
                'errors' => [
                    'required' => 'Radius tidak boleh kosong',
                    'integer' => 'Radius harus berupa angka bulat'
                ]
            ],
            'zona_waktu' => [
                'rules' => 'required|max_length[4]',
                'errors' => [
                    'required' => 'Zona Waktu tidak boleh kosong',
                    'max_length' => 'Zona Waktu tidak boleh lebih dari 4 karakter'
                ]
            ],
            'jam_masuk' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Jam Masuk tidak boleh kosong',
                    'valid_time' => 'Jam Masuk harus berupa waktu yang valid (HH:MM:SS)'
                ]
            ],
            'jam_pulang' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Jam Pulang tidak boleh kosong',
                    'valid_time' => 'Jam Pulang harus berupa waktu yang valid (HH:MM:SS)'
                ]
            ]
        ];


        if (!$this->validate($rules)) {
            $data = [
                'title' => 'Edit Lokasi Presensi',
                'lokasi_presensi' => $lokasiPresensiModel->find($id),
                'validation' => \Config\Services::validation()
            ];
            return view('admin/lokasi_presensi/edit', $data); // Use return instead of echo
        } else {
            $lokasiPresensiModel->update($id, [
                'nama_lokasi' => $this->request->getPost('nama_lokasi'),
                'alamat_lokasi' => $this->request->getPost('alamat_lokasi'),
                'tipe_lokasi' => $this->request->getPost('tipe_lokasi'),
                'latitude' => $this->request->getPost('latitude'),
                'longitude' => $this->request->getPost('longitude'),
                'radius' => $this->request->getPost('radius'),
                'zona_waktu' => $this->request->getPost('zona_waktu'),
                'jam_masuk' => $this->request->getPost('jam_masuk'),
                'jam_pulang' => $this->request->getPost('jam_pulang')
            ]);
            session()->setFlashdata('berhasil', 'Data berhasil diupdate');
            return redirect()->to(base_url('/admin/lokasi_presensi'));
        }
    }

    public function delete($id)
    {
        $lokasiPresensiModel = new LokasiPresensiModel();
        $lokasiPresensi = $lokasiPresensiModel->find($id);
        if ($lokasiPresensi) {
            $lokasiPresensiModel->delete($id);
            session()->setFlashdata('berhasil', 'Data berhasil dihapus');
            return redirect()->to(base_url('/admin/lokasi_presensi'));
        }
    }
}
