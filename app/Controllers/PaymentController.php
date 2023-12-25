<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PaymentModel as Payment;
use App\Models\CompanyModel as Company;
use App\Models\FundingModel as Funding;
use App\Models\ContractModel as Contract;

class PaymentController extends BaseController
{
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
        $company = new Company;
        $companies = $company->findAll();
        $funding = new Funding;
        $fundings = $funding->findAll();
        $contract =  new Contract;
        $contracts = $contract->findAll();

        return view('payment/add', [
            'companies' => $companies,
            'fundings' => $fundings,
            'contracts' => $contracts
        ]);
    }

    /**
     * Attempt to add new payment
     */
    public function AddAction()
    {
        if (! $this->request->is('post')) {
            return redirect()->to('/add-payment');
        }
        
        $payment = new Payment;
        $data = [
            'company_id' => $this->request->getVar('company'),
            'contract_NrAtto' => $this->request->getVar('contract'),
            'funding_model_number' => $this->request->getVar('funding')
        ];

        $saved = $payment->insert($data);
        if ($saved == true) {
            return redirect()->to('/payments');
        } else {
            return view('payment/add', ['errors' => $payment->errors()]);
        }
    }
}
