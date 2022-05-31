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
        echo view('hello_view', ['text' => $s]);
    }
}
