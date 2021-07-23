<?php


namespace App\DbConnection;


class DbConnection
{
    public static function getConnection(): \PDO
    {
        $db = new \PDO('mysql:host=127.0.0.1;dbname=todo', 'root', 'password');
        $db->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        $db->setAttribute(\PDO::ATTR_DEFAULT_FETCH_MODE, \PDO::FETCH_ASSOC);
        return $db;
    }
}