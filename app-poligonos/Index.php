<?php
require_once "src/Retangulo.php";
require_once "src/Quadrado.php";

use src\Retagulo;
use src\Quadrado;

$retangulo = new Retagulo();
$retangulo->setLargura(5);
$retangulo->setAltura(10);
echo "Área do Retângulo: " . $retangulo->calcularArea();
