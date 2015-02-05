<?php

namespace Projeto2\Clientes;

use Projeto2\BD\conexaoDB;

class Fixture
{
    private $conexao;
    private $cliente1;
    private $cliente2;
    private $cliente3;
    private $cliente4;
    private $cliente5;
    private $cliente6;
    private $cliente7;
    private $cliente8;
    private $cliente9;
    private $cliente10;


    public function __construct(ConexaoDB $conexao)
    {

        $this->conexao = $conexao;

    }


    public function CriarBanco()
    {
        $this->getConexao()->ConexaoDBConexaoDB()->query("CREATE DATABASE TESTE;");
    }

    public function DeletandoTabela()
    {
        $this->getConexao()->ConexaoDB()->query("DROP TABLE IF EXISTS ClientePF;");
        $this->getConexao()->ConexaoDB()->query("DROP TABLE IF EXISTS ClientePJ;");
    }


    public function CriarTabela()
    {

        $this->getConexao()->ConexaoDB()->query("CREATE TABLE ClientePF(id int NOT NULL AUTO_INCREMENT,
TipoCliente VARCHAR (50) CHARACTER SET 'utf8' NULL,Nome Varchar (150) CHARACTER SET 'utf8' NULL,
idade INT NOT NULL,sexo varchar(50) CHARACTER SET 'utf8' NULL,endereco VARCHAR (150) CHARACTER SET 'utf8' NULL,
telefone VARCHAR (50)  CHARACTER SET 'utf8' NULL,cpf VARCHAR (50)  CHARACTER SET 'utf8' NULL,starts INT NOT NULL,
InterfaceCobranca Varchar (150) CHARACTER SET 'utf8' NULL,PRIMARY KEY (id)) ;");

        $this->getConexao()->ConexaoDB()->query("CREATE TABLE ClientePJ (id int NOT NULL AUTO_INCREMENT,
TipoCliente VARCHAR (50) CHARACTER SET 'utf8' NULL,Nome Varchar (150) CHARACTER SET 'utf8' NULL,
idade INT NOT NULL,sexo varchar(50) CHARACTER SET 'utf8' NULL,endereco VARCHAR (150) CHARACTER SET 'utf8' NULL,
telefone VARCHAR (50)  CHARACTER SET 'utf8' NULL,cnpj VARCHAR (50)  CHARACTER SET 'utf8' NULL,starts INT NOT NULL,
InterfaceCobranca Varchar (150) CHARACTER SET 'utf8' NULL,PRIMARY KEY (id)) ;");

    }


    public function flush()
    {

        $this->getConexao()->conexaoDB()->prepare("INSERT INTO ClientePF (id, TipoCliente, Nome,idade,sexo,endereco,telefone,cpf,
starts,InterfaceCobranca) VALUES

(1,'Pessoa Fisica','chris',27,'masculino','maua',45133703,'232.123.321-23',5,'avenida barão'),
(2,'Pessoa Fisica','Maria',28,'feminino','maua',26298381,'312.231.231-32',3,'vila assis'),
(3,'Pessoa Fisica','Ruroune kenshi',22,'masculino','santos',233431223,'341.213.454-53',4,'pedrodo'),
(4,'Pessoa Fisica','Ryugi',23,'masculino','santo andre',4545454232,'654.564.233-21',5,'Hayde'),
(5,'Pessoa Fisica','joao',25,'masculino','sao paulo',1232314132,'425.123.341-64',3,'Rua das laranjeiras');")->execute();

        $this->getConexao()->conexaoDB()->prepare("INSERT INTO ClientePJ (id, TipoCliente, Nome,idade,sexo,endereco,telefone,cnpj,
starts,InterfaceCobranca) VALUES

(6,'Pessoa Juridica','Empresa 1',22,'masculino','brasilia',433431223,'222.432.123-32',3,'rua 2'),
(7,'Pessoa Juridica','Empresa 2',22,'masculino','santos',233431223,'213.212.546-33',4,'avenida da liberdade'),
(8,'Pessoa Juridica','Empresa 3',32,'masculino','são caetano',933431223,'654.325.323-23',5,'avenida da saldade'),
(9,'Pessoa juridica','Empresa 4',16,'masculino','maua',633431223,'827.938.927-22',3,'rua 3'),
(10,'Pessoa juridica','Empresa 5',42,'masculino','sao bernado',833431223,'878.245.321-32',4,'rua 10');")->execute();


    }


    public function Persist(Cliente $cliente1, $cliente2, $cliente3, $cliente4, $cliente5, $cliente6, $cliente7, $cliente8, $cliente9, $cliente10)
    {
        $this->cliente1 = $cliente1;
        $this->cliente2 = $cliente2;
        $this->cliente3 = $cliente3;
        $this->cliente4 = $cliente4;
        $this->cliente5 = $cliente5;
        $this->cliente6 = $cliente6;
        $this->cliente7 = $cliente7;
        $this->cliente8 = $cliente8;
        $this->cliente9 = $cliente9;
        $this->cliente10 = $cliente10;
    }


    public function getConexao()
    {
        return $this->conexao;
    }

    public function getCliente2()
    {
        return $this->cliente2;
    }


    public function setCliente2($cliente2)
    {
        $this->cliente2 = $cliente2;
    }

    public function getCliente10()
    {
        return $this->cliente10;
    }


    public function setCliente10($cliente10)
    {
        $this->cliente10 = $cliente10;
    }

    public function getCliente9()
    {
        return $this->cliente9;
    }


    public function setCliente9($cliente9)
    {
        $this->cliente9 = $cliente9;
    }


    public function getCliente8()
    {
        return $this->cliente8;
    }


    public function setCliente8($cliente8)
    {
        $this->cliente8 = $cliente8;
    }


    public function getCliente4()
    {
        return $this->cliente4;
    }


    public function setCliente4($cliente4)
    {
        $this->cliente4 = $cliente4;
    }


    public function getCliente5()
    {
        return $this->cliente5;
    }


    public function setCliente5($cliente5)
    {
        $this->cliente5 = $cliente5;
    }


    public function getCliente6()
    {
        return $this->cliente6;
    }


    public function setCliente6($cliente6)
    {
        $this->cliente6 = $cliente6;
    }


    public function getCliente7()
    {
        return $this->cliente7;
    }


    public function setCliente7($cliente7)
    {
        $this->cliente7 = $cliente7;
    }


    public function getCliente3()
    {
        return $this->cliente3;
    }

    public function setCliente3($cliente3)
    {
        $this->cliente3 = $cliente3;
    }


    public function getCliente1()
    {
        return $this->cliente1;
    }


    public function setCliente1($cliente1)
    {
        $this->cliente1 = $cliente1;
    }


}