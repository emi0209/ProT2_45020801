<?php

namespace App\Controllers; 

class Home extends BaseController  
{
    public function index()
    {
        echo view('front/head_view');
        echo view('front/navbar_view');
        echo view('front/principal');
        echo view('front/footer_view');
    }

    public function quienes_somos()
    { 
        echo view('front/head_view');
        echo view('front/navbar_view');
        echo view('front/quienes_somos');
        echo view('front/footer_view');
    }

    public function acerca_de()
    {
        echo view('front/head_view');
        echo view('front/navbar_view');
        echo view('front/acerca_de');
        echo view('front/footer_view');
    }

    public function registrarse()
    {
        echo view('front/head_view');
        echo view('front/navbar_view');
        echo view('front/registrarse');
        echo view('front/footer_view');
    }

    public function iniciar_sesion()
    {
        echo view('front/head_view');
        echo view('front/navbar_view');
        echo view('front/iniciar_sesion');
        echo view('front/footer_view');
    }
}
