<?php

namespace App;

use App\Mensageiro;

//email
$msg = new Mensageiro();
$msg->setCanal('email');
$msg->enviarToken();

//sms
$msg2 = new Mensageiro();
$msg2->setCanal('sms');
$msg2->enviarToken();
