<?php

namespace App\Models;

use CodeIgniter\Model;

class ContractModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'contracts';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'company', 'code_es', 'model_number','st_app', 'cig', 'nr_atto','contract_value',
        'annualities', 'installment_years','scelta_contraente'
    ];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [
        'company' => 'required|numeric',
        'code_es' => 'required|max_length[30]|alpha_numeric_space',
        'model_number' => 'required|max_length[30]|alpha_numeric_space',
        'st_app' => 'required|max_length[30]|alpha_numeric_space',
        'cig' => 'required|max_length[30]|alpha_numeric_space',
        'nr_atto' => 'required|max_length[30]|alpha_numeric_space',
        'contract_value' => 'required|max_length[20]',
        'annualities' => 'required|max_length[30]|alpha_numeric_space',
        'installment_years' => 'required|max_length[30]|numeric',
        'scelta_contraente' => 'required|max_length[30]',
    ];
    
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];
}
