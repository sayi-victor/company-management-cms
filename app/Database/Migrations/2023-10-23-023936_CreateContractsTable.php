<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateContractsTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'auto_increment' => TRUE
            ],
            'code_es' => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            'model_number' => [
                'type' => 'INTEGER'
            ],
            'st_app' => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            'cig' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'unique' => TRUE
            ],
            'nr_atto' => [
                'type' => 'INTEGER',
                'unique' => TRUE
            ],
            'contract_value' => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            'annualities' => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            'installment_years' => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            'scelta_contraente' => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            'company' => [
                'type' => 'BIGINT',
                'contraint' => 5,
                'unsigned' => TRUE
            ],
            'created_at' => [
                'type' => 'TIMESTAMP',
                'null' => TRUE
            ],
            'updated_at' => [
                'type' => 'TIMESTAMP',
                'null' => TRUE
            ],
            'deleted_at' => [
                'type' => 'TIMESTAMP',
                'null' => TRUE,
            ],
        ]);

        $this->forge->addKey('code_es', true);
        $this->forge->addForeignKey('company', 'companies', 'vat_number', 'CASCADE');
        $this->forge->addForeignKey('model_number', 'fundings', 'id', 'CASCADE');
        $this->forge->createTable('contracts');
    }

    public function down()
    {
        $this->forge->dropTable('contracts', true);
    }
}
