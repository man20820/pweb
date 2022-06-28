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
            'full_name' => 'Fatkhurrahman',
            'password_hash' => password_hash('!Qwerty123', PASSWORD_DEFAULT),
            'activate_hash' => "cf5aabc3f0c2b4e258ebdc5b1312a647",
            'active' => '1',
            'force_pass_reset' => '0',
            'created_at' => '2022-06-28 11:21:56',
        ];

        // Simple Queries
        //$this->db->query('INSERT INTO users (username, email, password_hash, active) VALUES(:username:, :email:, :password_hash:, :active:)', $data);

        // Using Query Builder
        $this->db->table('users')->insert($data);
    }
}
