<?php

namespace Projeto2\Clientes;

abstract class Cliente
{
    private $id;
    private $TipoCliente;
    private $Nome;
    private $idade;
    private $sexo;
    private $endereco;
    private $telefone;


    public function getId()
    {
        return $this->id;
    }


    public function setId($id)
    {
        $this->id = $id;
    }


    public function getTipoCliente()
    {
        return $this->TipoCliente;
    }


    public function setTipoCliente($TipoCliente)
    {
        $this->TipoCliente = $TipoCliente;
    }

    public function getNome()
    {
        return $this->Nome;
    }

    public function setNome($Nome)
    {
        $this->Nome = $Nome;
    }


    public function getIdade()
    {
        return $this->idade;
    }

    public function setIdade($idade)
    {
        $this->idade = $idade;
    }


    public function getSexo()
    {
        return $this->sexo;
    }


    public function setSexo($sexo)
    {
        $this->sexo = $sexo;
    }


    public function getEndereco()
    {
        return $this->endereco;
    }


    public function setEndereco($endereco)
    {
        $this->endereco = $endereco;
    }


    public function getTelefone()
    {
        return $this->telefone;
    }


    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;
    }


}






