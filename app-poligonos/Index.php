<?php
require_once "src/Poligono.php";
require_once "src/poligonos/Retangulo.php";
require_once "src/poligonos/Quadrado.php";

use src\Poligono;
use src\poligonos\Quadrado;
use src\poligonos\Retangulo;

$poligono = new Poligono();
$poligono->setForma(new Retangulo());
$poligono->getForma()->setLargura(10);
$poligono->getForma()->setAltura(5);

echo "<pre>";
print_r($poligono);
echo "</pre>";

$poligono = new Poligono();
$poligono->setForma(new Quadrado());
$poligono->getForma()->setLargura(10);

echo "<pre>";
print_r($poligono);
echo "</pre>";
