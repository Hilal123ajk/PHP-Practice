<?php


// Creating Database

class Database{

    public $connection;

    function __construct($config){

        $dsn = "mysql:".http_build_query($config,'',';');

        $this->connection = new PDO($dsn,'root','',[
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);

    }

    public function query($query){
            
        $statement = $this->connection->prepare($query);
        $statement->execute();

        return $statement;
    }
}