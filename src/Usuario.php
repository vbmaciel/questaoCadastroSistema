<?php

namespace Cadastro\Sistema;

class Usuario extends Permissao
{
    private string $telefone;
    private string $data_cadastro;
    private string $nome;


    public function cadastrar()
    {
        date_default_timezone_set('America/Sao_Paulo');
        $this->data_cadastro = date('d/m/Y \à\s H:i');
    }

    public function validaNome($dado){
        if (empty($dado)) throw new DadoNaoPreenchidoException('nome');
    }

    public function validaTelefone($dado){
        if (empty($dado)) throw new DadoNaoPreenchidoException('telefone');
    }

    public function validaNivel($dado){
        if (empty($dado)) throw new DadoNaoPreenchidoException('nivel');
    }

    public function preencherDados($nome, $telefone, $nivel){
        $this->validaNome($nome);
        $this->validaTelefone($telefone);
        $this->validaNivel($nivel);
        $this->nome = $nome;
        $this->telefone = $telefone;
        $this->setNivel($nivel);
    }

    public function getTelefone()
    {
        return $this->telefone;
    }

    public function getDataCadastro()
    {
        return $this->data_cadastro;
    }

    public function getNome()
    {
        return $this->nome;
    }





}