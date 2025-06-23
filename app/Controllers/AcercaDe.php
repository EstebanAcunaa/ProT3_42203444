<?php

namespace App\Controllers;

class AcercaDe extends BaseController
{
    public function index(): string
    {
        return 
            view('front/head_view') .
            view('front/navbar_view') .
            view('front/acercade') .
            view('front/footer_view');
    }
}