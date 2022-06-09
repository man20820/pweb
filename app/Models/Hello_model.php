<?php

namespace App\Models;

use CodeIgniter\Model;

class Hello_model extends Model
{
    public $string = 'Hello World!';
    public $stringNIM = '201110179';
    public $stringNama = 'Fatkhurrahman';

    public function Users()
    {
        return $this->db->table('users');
    }

    public function groupsUsers()
    {
        return $this->db->table('auth_groups_users');
    }

    public function groups()
    {
        return $this->db->table('auth_groups');
    }

    public function join()
    {
        return $this->db->table('users')
            ->join('auth_groups_users', 'users.id = auth_groups_users.user_id')
            ->join('auth_groups', 'auth_groups_users.group_id = auth_groups.id');
    }
}
