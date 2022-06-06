<?php

namespace App\Models;

use CodeIgniter\Model;

class Login_model extends Model
{
    public $username;
    public $nama;
    public $pass;

    public function __construct()
    {
        parent::__construct();
    }

    public function cekLogin()
    {
        $sql = sprintf("SELECT COUNT(*) AS cnt FROM user WHERE username='%s' AND password='%s'", $this->username, $this->password);
        $query = $this->db->query($sql);
        $row = $query->getRowArray();
        return $row['cnt'] == 1;
    }
}
