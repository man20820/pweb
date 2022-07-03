<?php

namespace App\Controllers;

$request = \Config\Services::request();

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
        $profile = new ProfileModel();
        $session = $session->get('logged_in');
        //dd($session);
        //$data = $model->join()->getWhere(['user_id' => $session])->getResultArray();
        $about = $profile->about()->getWhere(['id' => 1])->getResultArray();
        $skill = $profile->skills()->getWhere()->getResultArray();
        $job = $profile->jobs()->getWhere()->getResultArray();
        $data = [
            'about' => $about['0']['about'],
            'skill' => $skill,
            'job' => $job,

        ];
        //dd($data);
        //dd($skill);

        return view('dashboard/admin_view', $data);
        //echo view('dashboard/admin_view');
    }

    public function edit()
    {
        $profile = new ProfileModel();
        //$data['profile'] = $profile->getWhere()->getResultArray();
        //dd($data);

        $about = $this->request->getVar('about');
        dd($about);

        $profile->update(1, [
            "about" => $this->request->getPost('about')
        ]);
        //dd($profile);

        return redirect('admin');
    }
}
