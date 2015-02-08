<?php


namespace Projeto2\Clientes\Types;

use Projeto2\Clientes\Cliente;
use Projeto2\Clientes\Interfaces\Interfacestarts;
use Projeto2\Clientes\Interfaces\InterfaceCobranca;

class ClientePF extends Cliente implements Interfacestarts, InterfaceCobranca
{

    private $cpf;
    private $starts;

    /**
     * @return mixed
     */
    public function getCpf()
    {
        return $this->cpf;
    }

    /**
     * @param mixed $cpf
     */
    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
    }

    /**
     * @return mixed
     */
    public function getStarts()
    {
        return $this->starts;
    }

    /**
     * @param mixed $starts
     */
    public function setStarts($starts)
    {
        $this->starts = $starts;
    }

    /**
     * @return mixed
     */
    public function getInterfaceCobranca()
    {
        return $this->InterfaceCobranca;
    }

    /**
     * @param mixed $InterfaceCobranca
     */
    public function setInterfaceCobranca($InterfaceCobranca)
    {
        $this->InterfaceCobranca = $InterfaceCobranca;
    }

    private $InterfaceCobranca;


}
