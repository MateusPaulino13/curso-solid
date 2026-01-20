<?php

namespace src\poligonos;

class Retangulo
{
    protected $largura;
    protected $altura;

    public function setLargura($largura): void
    {
        $this->largura = $largura;
    }

    public function setAltura($altura): void
    {
        $this->altura = $altura;
    }

    public function getLargura(): float
    {
        return $this->largura;
    }

    public function getAltura(): float
    {
        return $this->altura;
    }
}
