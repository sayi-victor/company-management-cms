<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\CompanyModel as Company;

class CompanyController extends BaseController
{
    /**
     * Diplay all companies view
     */
    public function index()
    {
        $company = new Company;
        $companies = $company->findAll();

        return view('company/all', ['companies' => $companies ]);
    }

    /**
     * Diplay add company view
     */
    public function addView()
    {
        helper (['form']);
        return view('company/add');
    }

    /**
     * Attempt to add new company
     */
    public function addAction()
    {
        helper (['form']);
        if (! $this->request->is('post')) {
            return redirect()->to('/add-company');
        }
        
        $company = new Company;
        $data = [
            'name' => $this->request->getVar('name'),
            'address' => $this->request->getVar('address'),
            'vat_number' => $this->request->getVar('vat_number')
        ];

        $saved = $company->insert($data);
        if ($saved == true) {
            return redirect()->to('companies');
        } else {
            return view('company/add', ['errors' => $company->errors()]);
        }        
    }

    /**
     * Display update company view
     */
    public function updateView()
    {
        $company = new Company;
        $company = $company->find($this->request->getVar('id'));

        if ($company != NULL) {
            return view('company/edit', [
                'company' => $company
            ]);
        } else {
            return redirect()->to('/companies');
        }
    }

    /**
     * Display update company view
     */
    public function updateAction()
    {
        $company = new Company;

        $id = $this->request->getVar('id');
        if (! $this->validate([
            'id' => 'required',
            'name'     => 'required|max_length[30]|alpha_numeric_space|min_length[2]',
            'address'  => 'required|max_length[254]|alpha_numeric_space',
            'vat_number' => 'required|alpha_numeric|max_length[13]|min_length[11]|is_unique[companies.vat_number,vat_number,{id}]'
        ])) {

            $com = $company->find($id);
            return view('company/edit', [
                'errors' => $this->validator->getErrors(),
                'company' => $com
            ]);
        }

        $saved = $company->whereIn('vat_number', [$id])
                ->set([
                    'name' => $this->validator->getValidated()['name'],
                    'address' => $this->validator->getValidated()['address'],
                    // 'vat_number' => $this->validator->getValidated()['vat_number']
                ])->update();

        if ($saved == true) {
            return redirect()->to('companies');
        } else {
            $com = $company->find($id);
            return view('company/edit', [
                'company' => $com
            ]);
        }        
    }

    /**
     * Attempt to delete company
     */
    public function delete()
    {
        $com = new Company;
        $company = $com->find($this->request->getVar('id'));

        if ($company != NULL) {
            $del = $com->delete($this->request->getVar('id'));
        }

        return redirect()->to('/companies');
    }
}
