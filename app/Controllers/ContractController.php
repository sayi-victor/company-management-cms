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
        return view('contract/all', ['contracts' => $this->contracts()]);
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

    protected function contracts() 
    {
        $raw_contract = new Contract;
        $raw_contracts = $raw_contract->findAll();

        $contracts = [];
        foreach ($raw_contracts as $x) {
            $contract['code_es'] = $x['code_es'] ;
            $contract['model_number'] = $x['model_number'] ;
            $contract['st_app'] = $x['st_app'] ;
            $contract['cig'] = $x['cig'] ;
            $contract['nr_atto'] = $x['nr_atto'] ;
            $contract['contract_value'] = $x['contract_value'];
            $contract['annualities'] = $x['annualities'];
            $contract['scelta_contraente'] = $x['scelta_contraente'];
            $contract['installment_years'] = $x['installment_years'];
            $company = new Company;
            $company = $company->find($x['company']);
            $contract['company_name'] = $company['name'];
            $contract['company_vat'] = $company['vat_number'];
            array_push($contracts, $contract);
        }

        return $contracts;
    }
}
