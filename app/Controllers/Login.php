<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Login_model;

class Login extends Controller
{

    // public function __construct()
    // {
    //     parent::__construct();
    // }

    public $model = new Login_model();
    public function index()
    {

        if (isset($_POST['btnSubmit'])) {
            $this->model->username = $this->input->post('username');
            $this->model->password = $this->input->post('password');
            if ($this->model->login_check() == TRUE) {
                $this->session->set_userdata('username', $this->model->username);
                return view('login_success_view', ['model' => $this->model]);
            } else {
                redirect('login');
            }
        } else {
            return view('login_form_view', ['model' => $this->model]);
        }
    }
    public function logout()
    {
        if ($this->session->has_userdata('username')) {
            $this->session->sess_destroy();
            $this->load->view('login_form_view', ['model' => $this->model]);
        }
    }
}
