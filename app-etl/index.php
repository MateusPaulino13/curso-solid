<?php
require_once "src/Leitor.php";
require_once "src/Arquivo.php";

use App\Leitor;

//TXT
$leitorTxt = new Leitor();
$leitorTxt->setDiretorio(__DIR__ . "/arquivos");
$leitorTxt->setArquivo("dados.txt");
$txtData = $leitorTxt->lerArquivo();

//CSV
$leitorCsv = new Leitor();
$leitorCsv->setDiretorio(__DIR__ . "/arquivos");
$leitorCsv->setArquivo("dados.csv");
$csvData = $leitorCsv->lerArquivo();

echo "<pre>";
print_r(array_merge($txtData, $csvData));
echo "</pre>";
