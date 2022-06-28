<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class GroupPermisionSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'group_id' => 1,
            'permission_id' => 1,
        ];

        // Simple Queries
        //$this->db->query('INSERT INTO auth_groups (name, description) VALUES(:name:, :description:)', $data);

        // Using Query Builder
        $this->db->table('auth_groups_permissions')->insert($data);
    }
}
