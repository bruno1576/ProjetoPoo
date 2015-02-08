<?php


namespace Projeto2\BD;


class ConexaoDB
{

    private $pdo;


    public function __construct($dsn, $dbname, $name, $password)
    {

        try {
            $this->pdo = new \PDO($dsn, $name, $password);
            $this->pdo->exec("CREATE DATABASE IF NOT EXISTS $dbname");
            $this->pdo->exec("USE $dbname");

        } catch (\PDOException $ex) {
            echo "A conexao falhou" . $ex->getMessage();


        }

    }

    public function getConnection()
    {
        return $this->pdo;
    }


}