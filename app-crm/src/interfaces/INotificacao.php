<?php

namespace App\interfaces;

require_once "src/componentes/Notificacao.php";

use App\componentes\Notificacao;


interface INotificacao
{
    public function enviarNotificacao(Notificacao $notificacaos);
}
