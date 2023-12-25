<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel as User;

class UserController extends BaseController
{
    public function index()
    {
        $session = session();
        if ($session->has('id')) {
            $role = $session->get('role');
            
            // check if auth user can view users
            if ($role == 'admin') {
                $user = new User;
                $users = $user->findAll();

                return view('user/all', ['users' => $users ]);
            } else {
                return redirect()->to('/');     
            }
        } else {
            return redirect()->to('/');
        }

    }

    /**
     * Creates new user
    */
    public function create() 
    {
        helper (['form']);
        if (! $this->request->is('post')) {
            return redirect()->to('/add-user');
        }

        if (! $this->validate([
            'username' => 'required|max_length[20]|alpha_numeric',
            'email' => 'required|valid_email',
            'password' => 'required|min_length[8]|max_length[20]',
            'confirm_password' => 'matches[password]'
        ], [
            'confirm_password' => [
                'matches' => 'Passwords do not match'
            ]
        ])) {
            return view('user/add', [
                'errors' => $this->validator->getErrors()
            ]);
        }

        $user = new User;
        $saved = $user->save([
            'username' => $this->validator->getValidated()['username'],
            'email' => $this->validator->getValidated()['email'],
            'role' => 'user',
            'password' => password_hash($this->validator->getValidated()['password'], PASSWORD_DEFAULT),
        ]);

        if($saved == true) {
            return redirect()->to('/users');
        } else {
            return redirect()->to('/add-user');
        }
    }

    /**
     * Displays the registration form.
     */
    public function createView()
    {
        $session = session();
        if ($session->has('id')) {
            $role = $session->get('role');
            
            // check if auth user can create users
            if ($role == 'admin') {
                helper (['form']);
                return view('user/add');
            } else {
                return redirect()->to('/');     
            }

        } else {
            return redirect()->to('/');
        }
    }
}
