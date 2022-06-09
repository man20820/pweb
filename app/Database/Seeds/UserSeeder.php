<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'id'    => 1,
            'email'    => 'man@tkjpedia.com',
            'username' => 'man20820',
            'password_hash' => password_hash('!Qwerty123', PASSWORD_DEFAULT),
            'active' => '1',
        ];

        // Simple Queries
        //$this->db->query('INSERT INTO users (username, email, password_hash, active) VALUES(:username:, :email:, :password_hash:, :active:)', $data);

        // Using Query Builder
        $this->db->table('users')->insert($data);
    }
}
