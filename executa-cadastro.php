<?php

require 'autoload.php';

use Cadastro\Sistema\DadoNaoPreenchidoException;
use Cadastro\Sistema\Usuario;

$usuario = new Usuario();

try {
    $usuario->preencherDados('Vítor','992644664', 10);
    $usuario->cadastrar();
    echo $usuario->getNome().PHP_EOL;
    echo $usuario->getTelefone().PHP_EOL;
    echo $usuario->getNivel().PHP_EOL;
    echo $usuario->getDataCadastro();
}catch (DadoNaoPreenchidoException $exception){
    echo $exception->getMessage();
}

