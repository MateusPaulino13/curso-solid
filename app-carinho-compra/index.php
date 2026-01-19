<?php
require "./src/CarinhoCompra.php";
require "./src/Item.php";
require "./src/EmailService.php";
require "./src/Pedido.php";

use App\CarinhoCompra;
use App\Item;
use App\EmailService;
use App\Pedido;

$pedido = new Pedido();

$item1 = new Item();
$item2 = new Item();

$item1->setDescricao("Teclado Mecânico");
$item2->setDescricao("Monitor 4K");

$item1->setValor(450);
$item2->setValor(2500);

//--------------------------------
echo "<h4>Pedido iniciado</h4>";
echo "<pre>";
print_r($pedido);
echo "</pre>";
//--------------------------------

$pedido->getCarrinhoCompra()->AdicionarItem($item1);
$pedido->getCarrinhoCompra()->AdicionarItem($item2);

//--------------------------------
echo "<h4>Pedido com itens</h4>";
echo "<pre>";
print_r($pedido);
echo "</pre>";
//--------------------------------

//--------------------------------
echo "<h4>Itens do carrinho</h4>";
echo "<pre>";
print_r($pedido->getCarrinhoCompra()->GetItens());
echo "</pre>";
//--------------------------------

//--------------------------------
echo "<h4>Valor do pedido</h4>";
$total = 0;
foreach ($pedido->getCarrinhoCompra()->GetItens() as $key => $item) {
    $total += $item->getValor();
}
echo "Total: R$ " . $total;
//--------------------------------

//--------------------------------
echo "<h4>Carrinho é válido?</h4>";
echo $pedido->getCarrinhoCompra()->validarCarrinho() ? "Sim" : "Não";
//--------------------------------

//--------------------------------
echo "<h4>Status do pedido</h4>";
echo $pedido->getStatus();
//--------------------------------
echo "<h4>Confirmar pedido</h4>";
echo $pedido->confirmar();
//--------------------------------
echo "<h4>Statuso do pedido</h4>";
echo $pedido->getStatus();
//--------------------------------

//--------------------------------
echo "<h4>E-mail</h4>";
if ($pedido->getStatus() == "confirmado") {
    echo EmailService::dispararEmail();
}
//--------------------------------

// echo "<pre>";
// print_r($carinho1->exibirItens());
// echo "</pre>";

// echo "Valor total : R$ " . $carinho1->exibirValorTotal() . "\n";

// $carinho1->adicionarItem("Mouse", 150);
// $carinho1->adicionarItem("Tapete", 350);
// $carinho1->adicionarItem("Gibson Les Paul", 15000);

// echo "</br>";
// echo "<pre>";
// print_r($carinho1->exibirItens());
// echo "</pre>";
// echo "Valor total : R$ " . $carinho1->exibirValorTotal() . "\n";

// echo "</br>";
// echo "Status do carrinho: " . $carinho1->exibirStatus() . "\n";

// echo "</br>";
// if ($carinho1->confirmarPedido()) {
//     echo "Pedido confirmado com sucesso! \n";
// } else {
//     echo "Não foi possível confirmar o pedido. \n";
// };

// echo "</br>";
// echo "Status do carrinho: " . $carinho1->exibirStatus() . "\n";
