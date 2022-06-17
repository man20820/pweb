<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Hello_model;

class Hello extends Controller
{
    public function index()
    {
        $model = new Hello_model();
        $s = $model->string;
        $nim = $model->stringNIM;
        $nama = $model->stringNama;
        $data = $model->join()->get()->getResultArray();
        //dd($roles);
        echo view('hello_view', [
            'text' => $s,
            'nim' => $nim,
            'nama' => $nama,
            'username' => $data[0]['username'],
            'email' => $data[0]['email'],
            'roles' => $data[0]['name'],
        ]);
    }

    public function dashboard()
    {
        echo view('dashboard/admin_view');
    }
}
