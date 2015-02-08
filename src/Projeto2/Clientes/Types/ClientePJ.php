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

    public function getCnpj()
    {
        return $this->cnpj;
    }

    public function setCnpj($cnpj)
    {
        $this->cnpj = $cnpj;
    }


    public function getInterfaceCobranca()
    {
        return $this->InterfaceCobranca;
    }


    public function setInterfaceCobranca($InterfaceCobranca)
    {
        $this->InterfaceCobranca = $InterfaceCobranca;
    }

    public function getStarts()
    {
        return $this->starts;
    }


    public function setStarts($starts)
    {
        $this->starts = $starts;
    }


}
