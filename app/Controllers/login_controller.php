<?php
namespace App\Controllers;
Use CodeIgniter\Controller;
Use App\Models\usuario_Model;

class login_controller extends BaseController 
{
    public function index() 
    {
        helper(['form','url']);

        $dato['titulo']='login';
        echo view('front/head_view', $dato);        
        echo view('front/navbar_view');
        echo view('back/usuario/login');
        echo view('front/footer_view');
    }

    public function auth()
    {
        $session = session();
        $model = new usuario_Model();
        
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('pass');

        $data = $model->where('email', $email)->first();
        if ($data) {
            $pass = $data['pass'];
              $ba = $data['baja'];
               if ($ba == 'SI') {
                $session->setFlashdata('msg','usuario dado de baja');
                 return redirect()->to('/login_controller');
                }
              $verify_pass = password_verify($password, $pass);  
              if ($verify_pass) {
                $ses_data = [
                    'id_usuario' => $data['id_usuario'],
                    'email' => $data['email'],
                    'nombre' => $data['nombre'],
                    'apellido' => $data['apellido'],
                    'usuario' => $data['usuario'],
                    'perfil_id' => $data['perfil_id'],
                    'logged_in' => TRUE                    
                ];

                $session->set($ses_data);
                session()->setFlashdata('msg','Bienvenido!!!');
                return redirect()->to('/panel');
              } else {
                $session->setFlashdata('msg','Contraseña incorrecta');
                return redirect()->to('/login_controller');
              }
            } else {
                $session->setFlashdata('msg','El usuario no existe');
                return redirect()->to('/login_controller');
            }
        }

        public function logout() {
            $session = session();
            $session->destroy();
            return redirect()->to('/');
        }
}