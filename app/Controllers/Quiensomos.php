<?php

namespace App\Controllers;

class QuienSomos extends BaseController
{
    public function index()
    {
        $data['titulo'] = 'Quienes somos';
        echo view('front/head_view', $data) ;
        echo view('front/navbar_view') ;
        echo view('front/quiensomos') ;
        echo view('front/footer_view');
    }
     
}
