<?php

namespace App\Controllers;

class Registro extends BaseController
{
    public function index()
    {
        $data['titulo'] = 'Registro';
        echo view('front/head_view', $data) ;
        echo view('front/navbar_view') ;
        echo view('back/Usuario/registro') ;
        echo view('front/footer_view');
    }
}