<?php

namespace App;

class CarinhoCompra
{
    private $itens;

    public function __construct()
    {
        $this->itens = [];
    }

    public function GetItens()
    {
        return $this->itens;
    }

    public function AdicionarItem(Item $item)
    {
        array_push($this->itens, $item);
    }

    public function validarCarrinho()
    {
        return count($this->itens) > 0;
    }
}
