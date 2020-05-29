<?php

namespace Source\Controllers;

use Source\Core\Controller;

class Login extends Controller
{
    public function __construct($router) {
        parent::__construct($router);
    }


    // ─── LOGIN ───────────────────────────────────────────────────────────────────────

    public function login()
    {       
        echo $this->view->render("login/login" , [
            "title" => "Login | " . SITE["name"] 
        ]);
    }

    public function forget()
    {       
        echo $this->view->render("login/forget" , [
            "title" => "Esqueci a senha | " . SITE["name"] 
        ]);
    }

    public function newPassword()
    {       
        echo $this->view->render("login/newPassword" , [
            "title" => "Nova senha | " . SITE["name"] 
        ]);
    }

    public function code()
    {       
        echo $this->view->render("login/code" , [
            "title" => "Confirmar Código | " . SITE["name"] 
        ]);
    }

    public function logout()
    {       
        echo $this->view->render("login/login" , [
            "title" => "Confirmar Código | " . SITE["name"] 
        ]);
    }
}