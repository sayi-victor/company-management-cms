<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\RequestInterface;
use App\Models\ContractModel as Contract;
use App\Models\CompanyModel as Company;
use App\Models\FundingModel as Funding;

class ContractController extends BaseController
{
    /**
    * Diplay all contracts view
    */
    public function index()
    {
        $contract = new Contract;
        $contracts = $contract->findAll();
    
        return view('contract/all', ['contracts' => $contracts]);
    }

    /**
    * Diplay add funding view
    */
    public function addView()
    {
        helper (['form']);
        $company = new Company;
        $companies = $company->findAll();
        $funding = new Funding;
        $fundings = $funding->findAll();

        return view('contract/add', [
            'companies' => $companies,
            'fundings' => $fundings
        ]);
    }

    /**
    * Attempt to add new funding
    */
    public function addAction()
    {
        if (! $this->request->is('post') ) {
            return redirect()->to('/add-contract');
        }

        helper (['form']);
        $contract = new Contract;
        $data = [
            'company' => $this->request->getVar('company'),
            'code_es' => $this->request->getVar('code_es'),
            'model_number' => $this->request->getVar('model_number'),
            'st_app' => $this->request->getVar('st_app'),
            'cig' => $this->request->getVar('cig'),
            'nr_atto' => $this->request->getVar('nr_atto'),
            'contract_value' => $this->request->getVar('contract_value'),
            'annualities' => $this->request->getVar('annualities'),
            'installment_years' => $this->request->getVar('installment_years'),
            'scelta_contraente' => $this->request->getVar('scelta_contraente'),
        ];

        $saved = $contract->insert($data);
        if ($saved == true) {
            return redirect()->to('/contracts');
        } else {
            $company = new Company;
            $companies = $company->findAll();
            $funding = new Funding;
            $fundings = $funding->findAll();
            return view('contract/add', [
                'errors' => $contract->errors(),
                'companies' => $companies,
                'fundings' => $fundings
            ]);
        }

    }
}
