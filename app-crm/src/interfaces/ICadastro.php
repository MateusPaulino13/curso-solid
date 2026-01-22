<?php

namespace App\interfaces;

require_once "src/componentes/Log.php";
require_once "src/componentes/Notificacao.php";

use App\componentes\Log;
use App\componentes\Notificacao;


interface ICadastro
{
    public function salvar();
    public function registrarLog(Log $log);
    public function enviarNotificacao(Notificacao $notificacaos);
}
