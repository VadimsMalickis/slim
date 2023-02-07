<?php

namespace App;

class DBConnection
{
    protected \mysqli $dbConn;
    public function __construct() {
        $this->dbConn = new \mysqli(
            env('DB_HOST'),
            env('DB_USER'),
            env('DB_PASSWORD'),
            env('DB_NAME'),
            (int) env('DB_PORT')
        );
    }

    public function getConnection(): \mysqli
    {
        return $this->dbConn;
    }

    public function close()
    {
        $this->dbConn->close();
    }


}
