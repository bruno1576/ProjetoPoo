<?php


namespace Projeto2\Clientes;


use Projeto2\BD\conexaoDB;


class ConsultaClientePF
{

    private $conexao;


    public function __construct(ConexaoDB $conexao)
    {

        $this->conexao = $conexao;

    }


    public function getConexao()
    {
        return $this->conexao;
    }


    public function setConexao($conexao)
    {
        $this->conexao = $conexao;
    }


}

