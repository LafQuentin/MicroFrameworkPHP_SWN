<?php
namespace System;

use PDO;

class SPDO extends PDO
{
    private static $instance = null;
    const DEFAULT_SQL_USER = 'root';
    const DEFAULT_SQL_HOST = 'localhost';
    const DEFAULT_SQL_PASS = '';
    const DEFAULT_SQL_DTB = '';

    public function __construct()
    {
        parent::__construct('mysql:dbname='.self::DEFAULT_SQL_DTB.';host='.self::DEFAULT_SQL_HOST,self::DEFAULT_SQL_USER ,self::DEFAULT_SQL_PASS);
    }

    public static function getInstance() {
        if(is_null(self::$instance)) {
            self::$instance = new SPDO();
        }
        return self::$instance;
    }
}



