<?php

namespace Cadastro\Sistema;

class DadoNaoPreenchidoException extends \DomainException
{
    public function __construct($dado)
    {
        $mensagem = "O $dado não foi preenchido!";
        parent::__construct($mensagem);
    }
}