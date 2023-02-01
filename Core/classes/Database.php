<?php

namespace Core\classes;

use PDO;

class Database
{

    public $connection;
    public $statement;

    public function __construct($config, $username = 'root', $password = '')
    {
        $dsn = 'mysql:' . http_build_query($config, '', ';');

        $this->connection = new PDO($dsn, $username, $password, [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
    }

    public function query($query, $params = [])
    {
        $this->statement = $this->connection->prepare($query);

        $this->statement->execute($params);

        return $this;
    }

    public function find()
    {
        $note = $this->statement->fetch();
        if (!$note) {
            abort();
        }
        return $note;
    }

    public function findAll()
    {
        $notes = $this->statement->fetchAll();
        if (!$notes) {
            abort();
        }
        return $notes;
    }
}
