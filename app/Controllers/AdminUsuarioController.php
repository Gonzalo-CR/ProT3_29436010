<?php

namespace App\Controllers;
use App\Models\usuario_Model;
use CodeIgniter\Controller;

class AdminUsuarioController extends Controller {

    public function __construct() {
        helper(['form', 'url']);
    }

    public function index() {
        echo view('front/head_view');
        echo view('front/navbar_view');
        echo view('back/usuario/admin-usuario');
        echo view('front/footer_view');
    }

    public function buscarUsuario() {
        $id_usuario = $this->request->getVar('id_usuario');
        $usuarioModel = new usuario_Model();
        $usuario = $usuarioModel->find($id_usuario);
        
        $data['usuario'] = $usuario;

        echo view('front/head_view');
        echo view('front/navbar_view');
        echo view('back/usuario/admin-usuario', $data);
        echo view('front/footer_view');
    }

    public function actualizarUsuario($id_usuario) {
        $usuarioModel = new usuario_Model();

        $data = [
            'nombre' => $this->request->getVar('nombre'),
            'apellido' => $this->request->getVar('apellido'),
            'usuario' => $this->request->getVar('usuario'),
            'email' => $this->request->getVar('email'),
            'perfil_id' => $this->request->getVar('perfil_id'),
            'baja' => $this->request->getVar('baja')
        ];

        $usuarioModel->update($id_usuario, $data);

        return redirect()->to('/admin-usuario');
    }

    public function eliminarUsuario($id_usuario) {
        $usuarioModel = new usuario_Model();
        $usuarioModel->delete($id_usuario);

        return redirect()->to('/admin-usuario');
    }
}
