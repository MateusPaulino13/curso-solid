<?php

namespace App\dao;

use App\BD;
use App\componentes\Log;
use App\componentes\Notificacao;
use App\interfaces\ICadastro;

class UsuarioModel extends BD implements ICadastro
{
    public function salvar()
    {
        // Implementação do método salvar
    }

    public function registrarLog(Log $log)
    {
        // Implementação do método registrarLog
    }

    public function enviarNotificacao(Notificacao $notificacao)
    {
        // Implementação do método enviarNotificacao
    }
}
