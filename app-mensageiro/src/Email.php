<?php

namespace App;

use App\interfaces\IMensagemToken;

class Email implements IMensagemToken
{
    public function enviar(): void
    {
        echo "email: seu token é 1234";
    }
}
