<?php
function conexaoDB()
{

    try {
        $config = include "config.php";
        if (!isset($config['db'])) {

            throw new \InvalidArgumentException("configuração não existe");
        }


        $host = (isset($config['db']['host'])) ? $config['db']['host'] : NULL;
        $dbname = (isset($config['db']['dbname'])) ? $config['db']['dbname'] : NULL;
        $user = (isset($config['db']['user'])) ? $config['db']['user'] : NULL;
        $password = (isset($config['db']['password'])) ? $config['db']['password'] : NULL;


        return new \PDO("mysql:host={$host};dbname={$dbname}", $user, $password);

    } catch (\PDOException $e) {
        echo $e->getMessage() . "\n";
        echo $e->getTraceAsString() . "\n";

    }

}



