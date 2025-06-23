<?php

namespace App\Controllers;

class Registro extends BaseController
{
    public function index(): string
    {
        return 
            view('front/head_view') .
            view('front/navbar_view') .
            view('front/registro') .
            view('front/footer_view');
    }
}