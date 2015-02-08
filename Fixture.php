<?php

require_once __DIR__ . "/autoload.php";

use Projeto2\BD\conexaoDB;
use Projeto2\Clientes\PersistCliente;
use Projeto2\Clientes\Types\ClientePF;
use Projeto2\Clientes\Types\ClientePJ;


$conectar = new conexaoDB("mysql:host=localhost;charset=utf8", "teste", "root", "root");
$pdo = $conectar->getConnection();

$CriarTabelaClientePF = $pdo->prepare("CREATE TABLE IF NOT EXISTS ClientePF(id int NOT NULL AUTO_INCREMENT,
TipoCliente VARCHAR (50) CHARACTER SET 'utf8' NULL,Nome Varchar (150) CHARACTER SET 'utf8' NULL,
idade INT NOT NULL,sexo varchar(50) CHARACTER SET 'utf8' NULL,endereco VARCHAR (150) CHARACTER SET 'utf8' NULL,
telefone VARCHAR (50)  CHARACTER SET 'utf8' NULL,cpf VARCHAR (50)  CHARACTER SET 'utf8' NULL,starts INT NOT NULL,
InterfaceCobranca Varchar (150) CHARACTER SET 'utf8' NULL,PRIMARY KEY (id)) ;");
if (!$CriarTabelaClientePF->execute()) {
    die(print_r($CriarTabelaClientePF->errorInfo()));
}

$CriarTabelaClientePJ = $pdo->prepare("CREATE TABLE IF NOT EXISTS ClientePJ (id int NOT NULL AUTO_INCREMENT,
TipoCliente VARCHAR (50) CHARACTER SET 'utf8' NULL,Nome Varchar (150) CHARACTER SET 'utf8' NULL,
idade INT NOT NULL,sexo varchar(50) CHARACTER SET 'utf8' NULL,endereco VARCHAR (150) CHARACTER SET 'utf8' NULL,
telefone VARCHAR (50)  CHARACTER SET 'utf8' NULL,cnpj VARCHAR (50)  CHARACTER SET 'utf8' NULL,starts INT NOT NULL,
InterfaceCobranca Varchar (150) CHARACTER SET 'utf8' NULL,PRIMARY KEY (id)) ;");

if (!$CriarTabelaClientePJ->execute()) {
    die(print_r($CriarTabelaClientePJ->errorInfo()));
}


$ClientePersist = new PersistCliente($pdo);

$clientePF1 = new ClientePF();
$clientePF2 = new ClientePF();
$clientePF3 = new ClientePF();
$clientePF4 = new ClientePF();
$clientePF5 = new ClientePF();
$clientePJ1 = new ClientePJ();
$clientePJ2 = new ClientePJ();
$clientePJ3 = new ClientePJ();
$clientePJ4 = new ClientePJ();
$clientePJ5 = new ClientePJ();


$clientePF1->setId(1);
$clientePF1->setTipoCliente("Pessoa Fisica");
$clientePF1->setNome("chris");
$clientePF1->setIdade(27);
$clientePF1->setSexo("masculino");
$clientePF1->setEndereco("maua");
$clientePF1->setTelefone(45133703);
$clientePF1->setCpf("232.123.321-23");
$clientePF1->setStarts(5);
$clientePF1->setInterfaceCobranca("avenida barão");

$clientePF2->setId(2);
$clientePF2->setTipoCliente("Pessoa Fisica");
$clientePF2->setNome("Maria");
$clientePF2->setIdade(28);
$clientePF2->setSexo("feminino");
$clientePF2->setEndereco("maua");
$clientePF2->setTelefone(26298381);
$clientePF2->setCpf("312.231.231-32");
$clientePF2->setStarts(3);
$clientePF2->setInterfaceCobranca("vila assis");

$clientePF3->setId(3);
$clientePF3->setTipoCliente("Pessoa Fisica");
$clientePF3->setNome("Ruroune kenshi");
$clientePF3->setIdade(22);
$clientePF3->setSexo("masculino");
$clientePF3->setEndereco("santos");
$clientePF3->setTelefone(233431223);
$clientePF3->setCpf("341.213.454-53");
$clientePF3->setStarts(4);
$clientePF3->setInterfaceCobranca("pedrodo");

$clientePF4->setId(4);
$clientePF4->setTipoCliente("Pessoa Fisica");
$clientePF4->setNome("Ryugi");
$clientePF4->setIdade(23);
$clientePF4->setSexo("masculino");
$clientePF4->setEndereco("santo andre");
$clientePF4->setTelefone(4545454232);
$clientePF4->setCpf("654.564.233-21");
$clientePF4->setStarts(5);
$clientePF4->setInterfaceCobranca("Hayde");

$clientePF5->setId(5);
$clientePF5->setTipoCliente("Pessoa Fisica");
$clientePF5->setNome("joao");
$clientePF5->setIdade(25);
$clientePF5->setSexo("masculino");
$clientePF5->setEndereco("sao paulo");
$clientePF5->setTelefone(1232314132);
$clientePF5->setCpf("425.123.341-64");
$clientePF5->setStarts(3);
$clientePF5->setInterfaceCobranca("Rua das laranjeiras");

$clientePJ1->setId(6);
$clientePJ1->setTipoCliente("Pessoa Juridica");
$clientePJ1->setNome("Empresa 1");
$clientePJ1->setIdade(22);
$clientePJ1->setSexo("masculino");
$clientePJ1->setEndereco("brasilia");
$clientePJ1->setTelefone(433431223);
$clientePJ1->setCnpj("222.432.123-32");
$clientePJ1->setStarts(3);
$clientePJ1->setInterfaceCobranca("rua 2");

$clientePJ2->setId(7);
$clientePJ2->setTipoCliente("Pessoa Juridica");
$clientePJ2->setNome("Empresa 2");
$clientePJ2->setIdade(22);
$clientePJ2->setSexo("masculino");
$clientePJ2->setEndereco("santos");
$clientePJ2->setTelefone(233431223);
$clientePJ2->setCnpj("213.212.546-33");
$clientePJ2->setStarts(4);
$clientePJ2->setInterfaceCobranca("avenida da liberdade");

$clientePJ3->setId(8);
$clientePJ3->setTipoCliente("Pessoa Juridica");
$clientePJ3->setNome("Empresa 3");
$clientePJ3->setIdade(32);
$clientePJ3->setSexo("masculino");
$clientePJ3->setEndereco("são caetano");
$clientePJ3->setTelefone(933431223);
$clientePJ3->setCnpj("654.325.323-23");
$clientePJ3->setStarts(5);
$clientePJ3->setInterfaceCobranca("avenida da saldade");

$clientePJ4->setId(9);
$clientePJ4->setTipoCliente("Pessoa juridica");
$clientePJ4->setNome("Empresa 4");
$clientePJ4->setIdade(16);
$clientePJ4->setSexo("masculino");
$clientePJ4->setEndereco("maua");
$clientePJ4->setTelefone(633431223);
$clientePJ4->setCnpj("827.938.927-22");
$clientePJ4->setStarts(3);
$clientePJ4->setInterfaceCobranca("rua 3");

$clientePJ5->setId(10);
$clientePJ5->setTipoCliente("Pessoa juridica");
$clientePJ5->setNome("Empresa 5");
$clientePJ5->setIdade(42);
$clientePJ5->setSexo("masculino");
$clientePJ5->setEndereco("sao bernado");
$clientePJ5->setTelefone(833431223);
$clientePJ5->setCnpj("878.245.321-32");
$clientePJ5->setStarts(4);
$clientePJ5->setInterfaceCobranca("rua 10");


$ClientePersist->persist($clientePF1);
$ClientePersist->persist($clientePF2);
$ClientePersist->persist($clientePF3);
$ClientePersist->persist($clientePF4);
$ClientePersist->persist($clientePF5);
$ClientePersist->persist($clientePJ1);
$ClientePersist->persist($clientePJ2);
$ClientePersist->persist($clientePJ3);
$ClientePersist->persist($clientePJ4);
$ClientePersist->persist($clientePJ5);

$ClientePersist->flush();