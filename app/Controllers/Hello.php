<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Hello_model;

class Hello extends Controller
{
    public function index()
    {
        // $model = new Hello_model();
        // $s = $model->string;
        // $nim = $model->stringNIM;
        // $nama = $model->stringNama;
        // $data = $model->join()->get()->getResultArray();
        // //dd($roles);
        // echo view('hello_view', [
        //     'text' => $s,
        //     'nim' => $nim,
        //     'nama' => $nama,
        //     'username' => $data[0]['username'],
        //     'email' => $data[0]['email'],
        //     'roles' => $data[0]['name'],
        // ]);
        echo view('home/index');
        //dd("aaa");
    }

    public function admin()
    {
        $session = session();
        $model = new Hello_model();
        $session = $session->get('logged_in');
        //dd($session);
        $data = $model->join()->getWhere(['user_id' => $session])->getResultArray();
        //dd($data);
        echo view('dashboard/admin_view', [
            'username' => $data[0]['username'],
            'full_name' => $data[0]['full_name'],
            'email' => $data[0]['email'],
            'roles' => $data[0]['name'],
        ]);
        //echo view('dashboard/admin_view');
    }
}
