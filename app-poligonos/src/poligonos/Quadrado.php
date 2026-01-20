<?php

namespace src\poligonos;

class Quadrado extends Retangulo
{
    protected $largura;
    protected $altura;

    public function setAltura($lado): void
    {
        $this->largura = $lado;
        $this->altura = $lado;
    }

    public function setLargura($lado): void
    {
        $this->largura = $lado;
        $this->altura = $lado;
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
