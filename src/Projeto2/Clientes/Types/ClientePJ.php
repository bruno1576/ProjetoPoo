<?php


namespace Projeto2\Clientes\Types;

use Projeto2\Clientes\Cliente;
use Projeto2\Clientes\Interfaces\Interfacestarts;
use Projeto2\Clientes\Interfaces\InterfaceCobranca;

class ClientePJ extends Cliente implements Interfacestarts, InterfaceCobranca
{

    private $starts;
    private $cnpj;
    private $InterfaceCobranca;

    function __construct($id, $TipoCliente, $Nome, $idade, $sexo, $endereco, $telefone, $cnpj, $starts, $InterfaceCobranca)
    {
        parent::__construct($id, $TipoCliente, $Nome, $idade, $sexo, $endereco, $telefone);
        $this->cnpj = $cnpj;
        $this->starts = $starts;
        $this->InterfaceCobranca = $InterfaceCobranca;
    }


    public function getcnpj()
    {
        return $this->cnpj;
    }

    public function setcnpj($cnpj)
    {
        $this->cnpj = $cnpj;
        return $this;
    }

    public function getstarts()
    {
        return $this->starts;
    }

    public function setStarts($starts)
    {

        $this->starts = $starts;
        return $this;
    }

    public function getInterfaceCobranca()
    {
        return $this->InterfaceCobranca;
    }

    public function setInterfaceCobranca($InterfaceCobranca)
    {

        $this->InterfaceCobranca = $InterfaceCobranca;
        return $this;
    }
}
