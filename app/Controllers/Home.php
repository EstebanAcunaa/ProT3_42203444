<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data['titulo'] = 'pagina principal';
        echo view('front/head_view', $data) ;
        echo view('front/navbar_view') ;
        echo view('front/principal') ;
        echo view('front/footer_view');
    }
}





