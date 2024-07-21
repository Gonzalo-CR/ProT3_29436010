<?php
namespace App\Controllers;
Use App\Models\usuario_Model;
Use CodeIgniter\Controller;

class usuario_controller extends Controller {

    public function __construct(){
        helper(['form','url']);
    }

    public function create(){
        
        $dato['titulo'] = 'Registro';
        echo view('front/head_view', $dato);        
        echo view('front/navbar_view');
        echo view('back/usuario/registro');
        echo view('front/footer_view'); 
    }

    public function formValidation(){
        $input = $this->validate([
            'nombre' => 'required|min_length[3]|max_length[50]',
            'apellido' => 'required|min_length[3]|max_length[50]',
            'usuario' => 'required|min_length[3]|max_length[20]',
            'email' => 'required|min_length[3]|max_length[100]|valid_email|is_unique[usuario.email]',
            'pass' => 'required|min_length[6]|max_length[100]|matches[confirm_password]',
            'confirm_password' => 'required|min_length[6]|max_length[100]'
        ],
    );
    $formModel = new usuario_Model();

    if(!$input) {
        $data['titulo']='Registro';
        echo view('front/head_view', $data);
        echo view('front/nav_view');
        echo view('back/usuario/registro', ['validation' => $this->validator]);
        echo view('front/footer_view');
    } else {
        $formModel->save([
            'nombre' => $this->request->getVar('nombre'),
            'apellido' => $this->request->getVar('apellido'),
            'usuario' => $this->request->getVar('usuario'),
            'email' => $this->request->getVar('email'),
            'pass' => password_hash($this->request->getVar('pass'), PASSWORD_DEFAULT)


        ]);
        session()->setFlashdata('success', 'Usuario Registrado Correctamente');
        return $this->response->redirect('/login');
    }
    }
}