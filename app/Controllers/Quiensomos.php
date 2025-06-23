<?php

namespace App\Controllers;

class QuienSomos extends BaseController
{
    public function index(): string
    {
        return 
            view('front/head_view') .
            view('front/navbar_view') .
            view('front/quiensomos') .
            view('front/footer_view');
    }
}
