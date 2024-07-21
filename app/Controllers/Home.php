<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $dato['titulo']='pagina principal';
        echo view('front/head_view',$dato);
        echo view('front/navbar_view');
        echo view('front/principal_ultimo');
        echo view('front/footer_view');

    }
    public function quienes_somos() 
    {
        $dato['titulo']='quienes somos';
        echo view('front/head_view',$dato);
        echo view('front/navbar_view');
        echo view('front/quienes_somos');
        echo view('front/footer_view');

    }
    public function acerca_de() 
    {
        $dato['titulo']='acerca de';
        echo view('front/head_view',$dato);
        echo view('front/navbar_view');
        echo view('front/acerca_de');
        echo view('front/footer_view');

    }
    public function registro() 
    {
        $dato['titulo']='registro';
        echo view('front/head_view',$dato);
        echo view('front/navbar_view');
        echo view('back/usuario/registro');
        echo view('front/footer_view');

    }
    public function login() 
    {
        $dato['titulo']='login';
        echo view('front/head_view',$dato);
        echo view('front/navbar_view');
        echo view('back/usuario/login');
        echo view('front/footer_view');

    }
    public function adminUsuario()
    {
        $dato['titulo'] = 'Administrar Usuarios';
        echo view('front/head_view', $dato);
        echo view('front/navbar_view');
        echo view('back/usuario/admin-usuario');
        echo view('front/footer_view');
    }
}


