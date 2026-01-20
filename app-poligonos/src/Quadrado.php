<?php

namespace src;

class Quadrado extends Retangulo
{
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
}
