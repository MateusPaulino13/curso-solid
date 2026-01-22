<?php

require_once "src/Dao/LeadModel.php";
require_once "src/Dao/ContratoModel.php";
require_once "src/Dao/UsuarioModel.php";

use App\dao\LeadModel;
use App\dao\ContratoModel;
use App\dao\UsuarioModel;

$contratoModel = new ContratoModel();
print_r($contratoModel);
echo "</br>";

$leadModel = new LeadModel();
print_r($leadModel);
echo "</br>";

$usuarioModel = new UsuarioModel();
print_r($usuarioModel);
echo "</br>";
