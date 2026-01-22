<?php

namespace App;

use App\Mensageiro;
use App\Email;
use App\Sms;
use App\Whatsapp;

//email
$msg = new Mensageiro(new Email());
$msg->enviarToken();
echo "<br>";

//sms
$msg2 = new Mensageiro(new Sms());
$msg2->enviarToken();
echo "<br>";

//whatsapp
$msg3 = new Mensageiro(new Whatsapp());
$msg3->enviarToken();
echo "<br>";
