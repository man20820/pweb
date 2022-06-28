<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class DataSeeder extends Seeder
{
    public function run()
    {
        $this->call('UserSeeder');
        $this->call('GroupSeeder');
        $this->call('PermisionSeeder');
        $this->call('GroupPermisionSeeder');
        $this->call('GroupUsersSeeder');
    }
}
