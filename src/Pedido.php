<?php

namespace App;

class Pedido
{
    private $status;
    private $carrinhocompra;
    private $valorPedido;

    public function __construct()
    {
        $this->status = "aberto";
        $this->carrinhocompra = new CarinhoCompra();
        $this->valorPedido = 0;
    }

    public function getCarrinhoCompra()
    {
        return $this->carrinhocompra;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function setStatus($status)
    {
        $this->status = $status;
    }

    public function confirmar()
    {
        if ($this->carrinhocompra->validarCarrinho()) {
            $this->setStatus("confirmado");
            return true;
        } else {
            return false;
        }
    }
}
