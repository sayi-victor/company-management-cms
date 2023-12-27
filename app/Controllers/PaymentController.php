<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PaymentModel as Payment;
use App\Models\CompanyModel as Company;
use App\Models\FundingModel as Funding;
use App\Models\ContractModel as Contract;

class PaymentController extends BaseController
{
    protected $companies;
    protected $fundings;
    protected $contracts;

    public function __construct()
    {
        $company = new Company;
        $this->companies = $company->findAll();
        $funding = new Funding;
        $this->fundings = $funding->findAll();
        $contract =  new Contract;
        $this->contracts = $contract->findAll();
    }
    /**
     * Diplay all payments view
     */
    public function index() 
    {
        $payment = new Payment;
        $payments = $payment->findAll();

        return view('payment/all', ['payments' => $payments]);
    }

    /**
    * Diplay add payment view
    */
    public function addView()
    {
        return view('payment/add', [
            'companies' => $this->companies,
            'fundings' => $this->fundings,
            'contracts' => $this->contracts
        ]);
    }

    /**
     * Attempt to add new payment
     */
    public function AddAction()
    {
        helper (['form']);
        if (! $this->request->is('post')) {
            return redirect()->to('/add-payment');
        }
        
        $payment = new Payment;
        $funding = new Funding;
        
        $data = [
            'company_id' => $this->request->getVar('company_id'),
            'contract_NrAtto' => $this->request->getVar('contract_NrAtto'),
            'funding_model_number' => $this->request->getVar('funding_model_number'),
            'amount' => $this->request->getVar('amount')
        ];

        $fund = $funding->where('model_number', $this->request->getVar('funding_model_number'))->first();
        $funding_bal = $this->cleanCurrency($fund['total_amount']) - $this->cleanCurrency($this->request->getVar('amount'));
        $data['funding_balance'] = $funding_bal;

        $saved = $payment->insert($data);
        if ($saved == true) {
            return redirect()->to('/payments');
        } else {
            return view('payment/add', [
                'errors' => $payment->errors(),
                'companies' => $this->companies,
                'fundings' => $this->fundings,
                'contracts' => $this->contracts
            ]);
        }
    }

    protected function cleanCurrency($currency) {
        $cleanedValue = preg_replace('/[^\d,]/', '', $currency); 
        $numericValue = str_replace(',', '.', str_replace('.', '', $cleanedValue));

        return $numericValue;
    }
}
