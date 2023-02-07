<?php

namespace App\Repositories;

class HomeRepository extends AbstractRepository
{
    public function getAllUsers()
    {
        $sql = 'SELECT * FROM user';
        $result = $this->connection()->query($sql)->fetch_all();
        $this->connection()->close();

        return $result;
    }
}
