<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel as User;

class AuthController extends BaseController
{
    /**
     * Attempt to register new users
     */
    public function register()
    {
        helper (['form']);
        if (! $this->request->is('post')) {
            return redirect()->to('/register');
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
            return view('auth/register', [
                'errors' => $this->validator->getErrors()
            ]);
        }


        $user = new User;
        $saved = $user->save([
            'username' => $this->validator->getValidated()['username'],
            'email' => $this->validator->getValidated()['email'],
            'role' => 'user',
            'password' => $this->validator->getValidated()['password']
        ]);

        if($saved == true) {
            return redirect()->to('/login');
        } else {
            return redirect()->to('/register');
        }
    }

    /**
     * Attempt to login users
     */
    public function login()
    {
        helper (['form', 'url', 'session']);

        if (! $this->request->is('post')) {
            return redirect()->to('/register');
        }

        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');

        $userModel = new User;
        $user = $userModel->where('username', $username)->first();

        if ($user == NULL) {
            return view('auth/login', [
                'error' => 'Your credentials did not match our records'
            ]);
        }

        if ($password == $user['password']) {
            $session = session();
            $session->set($user);

            return redirect()->to('/');
        } else {
            return view('auth/login', [
                'error' => 'Your credentials did not match our records'
            ]);
        }
    }

    /**
     * Attempt to logout users
     */
    public function logout()
    {
        if (! $this->request->is('post')) {
            return redirect()->to('/register');
        }

        $session = session();
        $session->destroy();

        return redirect()->to('/login');
    }

    /**
     * Display to login view
     */
    public function loginView()
    {
        helper (['form']);
        return view('auth/login');
    }

    /**
     * Display register view
     */
    public function registerView()
    {
        helper (['form']);
        return view('auth/register');
    }
}
