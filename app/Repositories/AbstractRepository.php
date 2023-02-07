<?php

namespace App\Repositories;

use App\DBConnection;

class AbstractRepository
{
    private DBConnection $dbConnection;

    public function __construct()
    {
        $this->dbConnection = new DBConnection();
    }

    public function connection(): \mysqli
    {
        return $this->dbConnection->getConnection();
    }


}
