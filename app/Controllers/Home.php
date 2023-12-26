<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('home');
    }

    /**
     * return error 404
     */
    public function lost()
    {
        return view('errors/404');
    }
}
