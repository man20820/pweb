<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Hello_model;
use App\Models\ProfileModel;

class Hello extends Controller
{
    public function index()
    {
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
        
        echo view('dashboard/admin_view');
        //echo view('dashboard/admin_view');
    }

    public function edit() {
        $profile = new ProfileModel();
        $data['profile'] = $profile->getWhere()->getResultArray();
        //dd($data);

        $profile->update('1', [
            "about" => $this->request->getPost('about')
        ])
        return redirect('admin')
    }
}
