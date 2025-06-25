<?php

namespace App\Controllers;

class AcercaDe extends BaseController
{
    public function index()
    {
        $data['titulo'] = 'Acerca de';
        echo view('front/head_view') ;
        echo view('front/navbar_view') ;
        echo view('front/acercade') ;
        echo view('front/footer_view');
    }
}