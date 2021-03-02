<?php

namespace Cadastro\Sistema;

class Permissao
{
    protected int $nivel;

    public function getNivel()
    {
        return $this->nivel;
    }

    protected function setNivel($nivel)
    {
        $this->nivel = $nivel;
    }
}