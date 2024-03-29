<?php

namespace App\Core\Helpers;

class Connection
{
    public static function make($config)
    {
        try {
            return new \PDO($config['connection']);
        } catch(\PDOException $e) {
            exit($e->getMessage());
        }
    }
}
