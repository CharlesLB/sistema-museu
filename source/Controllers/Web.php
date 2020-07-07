<?php

namespace Source\Controllers;

use Source\Core\Controller;
use Source\Models\Mail;

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


    // ─── ADMIN ──────────────────────────────────────────────────────────────────────

    public function admin(): void
    {
        $mail = new Mail;
        $listMails = $mail->listUnreaded();
        $totalMails = $mail->countUnreaded();
        $totalReadedMails = $mail->find()->count();

        echo $this->view->render("admin/dashboard", [
            "title" => "Dashboard | " . SITE["name"],
            "page" => "dashboard",
            "listMails" => $listMails,
            "totalMails" => $totalMails,
            "totalReadedMails" => $totalReadedMails
        ]);
    } 

    public function collectionCategories(): void
    {

        $mail = new Mail;
        $listMails = $mail->listUnreaded();
        $totalMails = $mail->countUnreaded();

        echo $this->view->render("admin/collectionCategories", [
            "title" => "Acervo | " . SITE["name"],
            "page" => "project",
            "listMails" => $listMails,
            "totalMails" => $totalMails
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