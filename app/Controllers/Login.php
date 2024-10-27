<?php

namespace App\Controllers;
use App\Models\LoginModel;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Login extends BaseController
{
    public function index()
    {
        $data = [
            'validation' => \Config\Services::validation()
        ];
        return view('login', $data);
    }

    public function login_action()
    {
        // membuat rules untuk validation
        $rules = [
            'username' => 'required',
            'password' => 'required'
        ];
        // Memngecek rules apakah sudah mengikuti aturan
        if (!$this->validate($rules)) {

            // ambil dari variable data diatas ambil keynya itu validator
            $data['validation'] = $this->validator;

            return view('login', $data);
        }else{
            $session = session();
            $userModel = new LoginModel();
            $username = $this->request->getVar('username');
            $password = $this->request->getVar('password');
            $cekUsername = $userModel->where('username', $username)->first();
            // dd($cekUsername);

            if($cekUsername){
                $password_db = $cekUsername['password'];
                $cekPassword = password_verify($password, $password_db);
                if($cekPassword){

                    $session_data =[
                        'username' => $cekUsername['username'],
                        'logged_in' => TRUE,
                        'role_id'   => $cekUsername['role'],
                    ];
                    $session->set($session_data);

                    switch ($cekUsername['role']) {
                        case 'Admin':
                            return redirect()->to('admin/home');
                        case 'Pegawai':
                            return redirect()->to('pegawai/home');
                        default:
                            $session->setFlashdata('pesan', 'Anda belum memiliki role, silahkan hubungi admin');
                            session()->setFlashdata('alert_type', 'danger');
                            return redirect()->to('/');
                    }
                }else{
                    $session->setFlashdata('pesan', 'Password salah, silahkan coba lagi!!!');
                    return redirect()->to('/');
                };
            }else{
                $session->setFlashdata('pesan', 'Username salah, silahkan coba lagi!!!');
                return redirect()->to('/');
            };
        }
    }

    public function logout()
    {
        $session = session();
        // menghapus semua session yang telah di simpan 
        $session->destroy();
        return redirect()->to('/');
    }
}
