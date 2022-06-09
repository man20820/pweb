<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class PermisionSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'id' => 1,
            'name' => 'full access',
            'description' => 'penguasa',
        ];

        // Simple Queries
        //$this->db->query('INSERT INTO auth_groups (name, description) VALUES(:name:, :description:)', $data);

        // Using Query Builder
        $this->db->table('auth_permissions')->insert($data);
    }
}
