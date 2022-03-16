<?php

// This class is focussed on dealing with queries for one type of data
// That allows for easier re-using and it's rather easy to find all your queries
// This technique is called the repository pattern
class CardRepository
{
    private DatabaseManager $databaseManager;

    // This class needs a database connection to function
    public function __construct(DatabaseManager $databaseManager)
    {
        $this->databaseManager = $databaseManager;
    }

    public function create(): void
    {
        $values = "'{$_POST['name']}', '{$_POST['amount']}', '{$_POST['status']}'";
        var_dump($values);
        $query = "INSERT INTO people (`name`, `amount`, `status`) VALUES ($values)";
        $this->databaseManager->connection->query($query);
        echo "heifer";
    }

    // Get one
    public function find(): array
    {

    }

    // Get all
    public function get(): PDOStatement
    {
        $query = "SELECT * FROM `people`";
        $result = $this->databaseManager->connection->query($query);
        return $result;
    }
}