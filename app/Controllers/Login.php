<?php

namespace App\Controllers;

class Login extends BaseController
{
    public function index(): string
    {
        return 
            view('front/head_view') .
            view('front/navbar_view') .
            view('front/login') .
            view('front/footer_view');
    }
}