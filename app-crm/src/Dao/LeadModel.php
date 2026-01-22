<?php

namespace App\dao;

use App\BD;
use App\componentes\Notificacao;
use App\interfaces\ICadastro;
use App\interfaces\INotificacaow;

class Lead extends BD implements ICadastro, INotificacao
{
    public function salvar()
    {
        // Implementação do método salvar
    }

    public function enviarNotificacao(Notificacao $notificacao)
    {
        // Implementação do método enviarNotificacao
    }
}
