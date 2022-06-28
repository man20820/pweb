<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ProfileSeeder extends Seeder
{
    public function run()
    {
        $profiles = [
            'id' => 1,
            'about' => 'Saya sangat menyukai tentang jaringan, sysadmin, virtualisasi, dan pemrograman. Senang mempelajari teknologi baru, penyelesaian masalah, dan selalu belajar untuk mengasah kemampuan. Latar pendidikan SMK jurusan Teknik Komputer dan Jaringan program 4 tahun.',
        ];
        $skills = [
            'id' => 1,
            'profile_id' => 1,
            'skill' => 'mysql'
        ];
        $jobs = [
            'id' => '1',
            'profile_id' => '1',
            'job' => 'network engineer'
        ];

        $this->db->table('profiles')->insert($profiles);
        $this->db->table('skills')->insert($skills);
        $this->db->table('jobs')->insert($jobs);
    }
}
