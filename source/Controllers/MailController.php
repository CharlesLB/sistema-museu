<?php

namespace Source\Controllers;

use Source\Core\Controller;
use Source\Models\Mail;

class MailController extends Controller
{

    private $mail;

    public function __construct($router) {
        parent::__construct($router);

        $this->mail = new Mail;
    }

    public function contact(array $data): void
    {
        $data = filter_var_array($data, FILTER_SANITIZE_STRING);

        $this->mail->name = $data["name"];
        $this->mail->email = $data["email"];
        $this->mail->date = $data["date"];
        $this->mail->item = $data["item"];
        $this->mail->message = $data["message"];
        
        if (!$this->mail->save()) {
            $callback["message"] = message($this->mail->fail()->getMessage(), "error");
            echo json_encode($callback);
            return;
        }

        $this->mail->save();
        # $this->mail->send("Nova doação do {$this->mail->name}", $this->mail->message );

        $callback["message"] = message("Mensagem enviada com sucesso!", "success");
        $callback["success"] = true;
        echo json_encode($callback);
    }
}