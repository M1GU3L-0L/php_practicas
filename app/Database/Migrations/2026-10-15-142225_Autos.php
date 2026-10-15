<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Autos extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'marca' => [
                'type' => 'VARCHAR',
                'constraint' => '255'
            ],
            'modelo' => [
                'type' => 'VARCHAR',
                'constraint' => '255'
            ],
            'anio' => [
                'type' => 'INT',
                'constraint' => 4
            ],
            'descripcion' => [
                'type' => 'TEXT',
                'null' => true
            ]
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('autos');
    }

    public function down()
    {
        $this->forge->dropTable('autos');
    }
}
