<?php

namespace App\Controllers;
use App\Models\ProfileModel;

class Home extends BaseController
{
    public function index()
    {
        //return view('welcome_message');
        // $session = session();
        $model = new ProfileModel();
        // $session = $session->get('logged_in');
        //dd($session);
        $data = $model->join()->getWhere(['profiles.id' => '1'])->getResultArray();
        $skills = $model->skills()->getWhere()->getResultArray();
        $jobs = $model->jobs()->getWhere()->getResultArray();
        // dd($skills);
        // dd($data);
        $data1 = [
            'about' => $data[0]['about'],
            'skill' => $skills,
            'job' => $jobs,
        ];
        return view('home/index', $data1);
    }
}
