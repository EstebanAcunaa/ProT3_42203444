<?php

namespace App\Controllers;

class Login extends BaseController
{
    public function index()
    {
        $data['titulo'] = 'Login';
        echo view('front/head_view', $data) ;
        echo view('front/navbar_view') ;
        echo view('back/Usuario/login') ;
        echo view('front/footer_view');
    }
}