<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class GroupUsersSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'group_id' => 1,
            'user_id' => 1,
        ];

        // Simple Queries
        //$this->db->query('INSERT INTO auth_groups (name, description) VALUES(:name:, :description:)', $data);

        // Using Query Builder
        $this->db->table('auth_groups_users')->insert($data);
    }
}
