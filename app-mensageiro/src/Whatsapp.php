<?php

namespace App;

use App\interfaces\IMensagemToken;

class Whatsapp implements IMensagemToken
{
    public function enviar(): void
    {
        echo "whatsapp: seu token é 1234";
    }
}
