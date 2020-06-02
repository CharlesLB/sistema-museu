<?php

namespace Source\Controllers;

use Source\Core\Controller;

class Web extends Controller
{
    public function __construct($router) {
        parent::__construct($router);
    }


    // ─── HOME ───────────────────────────────────────────────────────────────────────

    public function home()
    {       
        echo $this->view->render("web/home" , [
            "title" => "Home | " . SITE["name"] 
        ]);
    }

    public function collection()
    {       
        echo $this->view->render("web/collection" , [
            "title" => "Acervo | " . SITE["name"] 
        ]);
    }

    public function library()
    {       
        echo $this->view->render("web/library" , [
            "title" => "Biblioteca | " . SITE["name"] 
        ]);
    }

    public function login()
    {       
        echo $this->view->render("login/login" , [
            "title" => "Login | " . SITE["name"] 
        ]);
    }

    // ─── ERROR ──────────────────────────────────────────────────────────────────────

    public function error(array $data): void
    {
       echo $this->view->render("web/error", [
            "title" => "Error | " . $data["errcode"],
            "error" => $data["errcode"]
        ]);
    }
}