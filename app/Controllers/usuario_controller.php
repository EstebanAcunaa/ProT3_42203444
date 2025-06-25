<?php

namespace App\Controllers;
Use App\Models\usuario_models;
use CodeIgniter\Controller;


class usuario_controller extends Controller {

    public function __construct()
    {
        helper(['from', 'url']);
    }

    public function create(){

        $dato['titulo']='Registro';
        echo view ('front/head_view',$dato);
        echo view ('front/nav_view');
        echo view ('back/usuario/registro');
        echo view ('front/footer_view');


    }
    

    public function fromValidation() {

        $input = $this ->validate([
            'nombre' => 'required|min_length[3]',
            'apellido' => 'required|min_length[3]|max_length[25]',
            'usuario' => 'required|min_length[3]',
            'email' => 'required|min_length[4]|max_length[100]|valid_email|is_unique[usuarios.email]',
            'pass' => 'required|min_length[3]|max_length[10]',

        ],
    );
    
    $fromModel = new usuario_models();

        if (!$input) {
            $data['titulo']='Registro';
            echo view ('front/head_view', $data);
            echo view ('front/navbar_view');
            echo view('back/usuario/registro', ['validation' => $this->validator]);
            echo view('front/footer_view');
        } else{
            $fromModel->save([
                'nombre' => $this->request->getVar('nombre'),
                'apellido' => $this->request->getVar('apellido'),
                'usuario' => $this->request->getVar('usuario'),
                'email' => $this->request->getVar('email'),
                'pass' => password_hash($this->request->getVar('pass'), PASSWORD_DEFAULT)
            ]);

            session()->setFlashdata('succes', 'Usuario registrado con exito');
            return $this->response->redirect('/login');

        }



    }




}


