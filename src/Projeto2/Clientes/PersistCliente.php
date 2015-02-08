<?php

namespace Projeto2\Clientes;

use Projeto2\Clientes\Cliente;


class PersistCliente
{

    private $pdo;

    private $clientes = array();

    public function __construct(\PDO $pdo)
    {
        $this->pdo = $pdo;
    }


    public function persist(Cliente $cliente)
    {


        if (!in_array($cliente, $this->clientes)) {
            $this->clientes[] = $cliente;
        }

    }


    public function flush()
    {

        foreach ($this->clientes as $cliente) {

            try {

                if (method_exists($cliente, "getCpf")) {

                    $stmt = $this->pdo->prepare("INSERT INTO ClientePF (id,TipoCliente,Nome,idade,sexo,endereco,telefone,cpf,
 starts,InterfaceCobranca)VALUES(:id,:TipoCliente,:Nome,:idade,:sexo,:endereco,:telefone,:cpf,:starts,:InterfaceCobranca)");
                    $cpf = $cliente->getCpf();
                    $stmt->bindParam(":cpf", $cpf);
                } else {
                    $stmt = $this->pdo->prepare("INSERT INTO ClientePJ (id,TipoCliente,Nome,idade,sexo,endereco,telefone,cnpj,
 starts,InterfaceCobranca) VALUES(:id,:TipoCliente,:Nome,:idade,:sexo,:endereco,:telefone,:cnpj,:starts,:InterfaceCobranca)");
                    $cnpj = $cliente->getcnpj();
                    $TipoCliente = $cliente->getTipoCliente();
                    $stmt->bindParam(":TipoCliente", $TipoCliente);
                    $stmt->bindParam(":cnpj", $cnpj);
                }

                $id = $cliente->getId();
                $TipoCliente = $cliente->getTipoCliente();
                $Nome = $cliente->getNome();
                $idade = $cliente->getIdade();
                $sexo = $cliente->getSexo();
                $endereco = $cliente->getEndereco();
                $telefone = $cliente->getTelefone();
                $starts = $cliente->getStarts();
                $InterfaceCobranca = $cliente->getInterfaceCobranca();

                $stmt->bindParam(":id", $id);
                $stmt->bindParam(":TipoCliente", $TipoCliente);
                $stmt->bindParam(":Nome", $Nome);
                $stmt->bindParam(":idade", $idade);
                $stmt->bindParam(":sexo", $sexo);
                $stmt->bindParam(":endereco", $endereco);
                $stmt->bindParam(":telefone", $telefone);
                $stmt->bindParam(":starts", $starts);
                $stmt->bindParam(":InterfaceCobranca", $InterfaceCobranca);
                if (!$stmt->execute()) {
                    print_r($stmt->errorInfo());
                }

            } catch (\PDOException $ex) {
                echo "Erro ao inserir dados: " . $ex->getMessage();
            }


        }

    }


}