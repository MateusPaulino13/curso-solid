<?php

namespace App;

class EmailService
{
    private $de;
    private $para;
    private $assunto;
    private $conteudo;

    public function __construct(
        $de = "contato@paulinoltda.com.br",
        $para = "",
        $assunto = "",
        $conteudo = ""
    ) {
        $this->de = $de;
        $this->para = $para;
        $this->assunto = $assunto;
        $this->conteudo = $conteudo;
    }

    public static function dispararEmail(/*$de, $para, $assunto, $conteudo*/)
    {
        return "-- email enviado --";
        // $email = new EmailService($de, $para, $assunto, $conteudo);
        // // Lógica para disparar o email
        // echo "Email disparado para: " . $email->para . "\n";
        // echo "Assunto: " . $email->assunto . "\n";
        // echo "Conteúdo: " . $email->conteudo . "\n";
    }
}
