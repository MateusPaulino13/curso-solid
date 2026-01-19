<?php
require_once "src/Leitor.php";
require_once "src/Arquivo.php";

use App\Leitor;

$leitor = new Leitor();
$leitor->setDiretorio(__DIR__ . "/arquivos");
$leitor->setArquivo("dados.csv");

echo "<pre>";
print_r($leitor->lerArquivo());
echo "</pre>";
