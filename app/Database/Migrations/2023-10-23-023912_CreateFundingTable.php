<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateFundingTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'auto_increment' => TRUE
            ],
            'vsp' => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            'op' => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            'model_number' => [
                'type' => 'INT',
                'unique' => TRUE,
                'constraint' => 11
            ],
            'total_amount' => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            'allocation' => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            'created_at' => [
                'type' => 'TIMESTAMP',
                'null' => TRUE,
            ],
            'updated_at' => [
                'type' => 'TIMESTAMP',
                'null' => TRUE,
            ],
            'deleted_at' => [
                'type' => 'TIMESTAMP',
                'null' => TRUE,
            ],
            ]);

            $this->forge->addKey('id', true);
            $this->forge->createTable('fundings');
    }

    public function down()
    {
        $this->forge->dropTable('fundings', true);
    }
}
