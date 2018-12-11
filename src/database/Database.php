<?php
namespace App;
trait Database
{

    private $ip, $port, $dbName, $dbUser, $dbPassword;

    function _construct()
    {
        $this->ip = getenv('DB_HOST');
        $this->port = getenv('DB_PORT');
        $this->dbName = getenv('DB_NAME');
        $this->dbUser = getenv('DB_USERNAME');
        $this->dbPassword = getenv('DB_PASSWORD');
    }


    function get(string $table, array $columns)
    {

    }

    function update(string $table, array $columns)
    {

    }

    function insert(string $table, array $columns)
    {

    }
}