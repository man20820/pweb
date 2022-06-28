<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class GroupSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'id' => 1,
            'name' => 'administrator',
            'description' => 'penguasa',
        ];

        // Simple Queries
        //$this->db->query('INSERT INTO auth_groups (name, description) VALUES(:name:, :description:)', $data);

        // Using Query Builder
        $this->db->table('auth_groups')->insert($data);
    }
}
