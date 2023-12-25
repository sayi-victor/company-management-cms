<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreatePaymentDetailsTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'auto_increment' => TRUE
            ],
            'company_id' => [
                'type' => 'BIGINT',
                'unsigned' => TRUE
            ],
            'contract_NrAtto' => [
                'type' => 'BIGINT',
                'unsigned' => TRUE
            ],
            'funding_model_number' => [
                'type' => 'BIGINT',
                'unsigned' => TRUE
            ],
            'created_at' => [
                'type' => 'TIMESTAMP',
                'null' => TRUE,
            ],
            'updated_at' => [
                'type' => 'TIMESTAMP',
                'null' => TRUE,
            ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('company_id', 'companies', 'vat_number', 'CASCADE');
        $this->forge->addForeignKey('contract_NrAtto', 'contracts', 'nr_atto', 'CASCADE');
        $this->forge->addForeignKey('funding_model_number', 'fundings', 'model_number', 'CASCADE');
        $this->forge->createTable('payment_details');
    }

    public function down()
    {
        $this->forge->dropTable('payment_details', true);
    }
}
