<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\FundingModel as Funding;

class FundingController extends BaseController
{
    /**
     * Diplay all fundings view
     */
    public function index() 
    {
        $funding = new Funding;
        $fundings = $funding->findAll();

        return view('funding/all', ['fundings' => $fundings]);
    }

    /**
     * Diplay add funding view
     */
    public function addView()
    {
        helper (['form']);
        return view('funding/add');
    }

    /**
     * Attempt to add new funding
     */
    public function AddAction()
    {
        if (! $this->request->is('post')) {
            return redirect()->to('/add-funding');
        }
        helper (['form']);
        
        $funding = new Funding;
        $data = [
            'vsp' => $this->request->getVar('vsp'),
            'op' => $this->request->getVar('op'),
            'model_number' => $this->request->getVar('model_number'),
            'total_amount' => $this->request->getVar('total_amount'),
            'allocation' => $this->request->getVar('allocation'),
        ];

        $saved = $funding->insert($data);
        if ($saved == true) {
            return redirect()->to('/fundings');
        } else {
            
            return view('funding/add', ['errors' => $funding->errors()]);
        }
    }

    /**
     * Display update company view
     */
    public function updateView()
    {
        $funding = new Funding;
        $funding = $funding->find($this->request->getVar('id'));

        if ($funding != NULL) {
            return view('funding/edit', [
                'funding' => $funding
            ]);
        } else {
            return redirect()->to('/fundings');
        }
    }

    /**
     * Display update company view
     */
    public function updateAction()
    {
        $funding = new Funding;
        if (! $this->validate([
            'id' => 'required',
            'vsp'     => 'required',
            'op'     => 'required',
            'model_number'     => 'required|numeric|is_unique[fundings.model_number,id,{id}]',
            'total_amount'  => 'required|max_length[12]',
            'allocation'     => 'required',
        ])) {

            $fund = $funding->find($this->request->getVar('id'));
            return view('funding/edit', [
                'errors' => $this->validator->getErrors(),
                'funding' => $fund
            ]);
        }

        $update = $funding->whereIn('id',[$this->request->getVar('id')])
                        ->set([
                        'vsp' => $this->validator->getValidated()['vsp'],
                        'op' => $this->validator->getValidated()['op'],
                        'model_number' => $this->validator->getValidated()['model_number'],
                        'total_amount' => $this->validator->getValidated()['total_amount'],
                        'allocation' => $this->validator->getValidated()['allocation'],
                        ])->update();

        if ($update == true) {
            return redirect()->to('/fundings');
        } else {
            $fund = $funding->find($this->request->getVar('id'));

            return view('funding/edit', [
                'errors' => $funding->errors(),
                'funding' => $fund
            ]);
        }
    }

    /**
     * Attempt to delete funding
     */
    public function delete()
    {
        $fund= new Funding;
        $funding = $fund->find($this->request->getVar('id'));

        if ($funding != NULL) {
            $del = $fund->delete($this->request->getVar('id'));
        }

        return redirect()->to('/fundings');
    }
}
