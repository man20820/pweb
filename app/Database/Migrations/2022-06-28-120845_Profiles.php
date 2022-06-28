<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Profiles extends Migration
{
    public function up()
    {
        $fields = [
            'id'               => ['type' => 'int', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
            'about'   => ['type' => 'varchar', 'constraint' => 255, 'null' => true],
            'skills'   => ['type' => 'int', 'constraint' => 11, 'null' => true],
            'jobs'   => ['type' => 'int', 'constraint' => 11, 'null' => true],
        ];
        $this->forge->addField($fields);
        $this->forge->addKey('id', true);
        $this->forge->createTable('profiles');

        $fields = [
            'id'               => ['type' => 'int', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
            'profile_id'               => ['type' => 'int', 'constraint' => 11, 'unsigned' => true],
            'skill'   => ['type' => 'varchar', 'constraint' => 255, 'null' => true],
            'description'   => ['type' => 'varchar', 'constraint' => 255, 'null' => true],
        ];
        $this->forge->addField($fields);
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('profile_id', 'profiles', 'id');
        $this->forge->createTable('skills');

        $fields = [
            'id'               => ['type' => 'int', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
            'profile_id'               => ['type' => 'int', 'constraint' => 11, 'unsigned' => true],
            'job'   => ['type' => 'varchar', 'constraint' => 255, 'null' => true],
            'description'   => ['type' => 'varchar', 'constraint' => 255, 'null' => true],
        ];
        $this->forge->addField($fields);
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('profile_id', 'profiles', 'id');
        $this->forge->createTable('jobs');
    }

    public function down()
    {
        $this->forge->dropTable('profiles');
        $this->forge->dropTable('skills');
        $this->forge->dropTable('jobs');
    }
}
