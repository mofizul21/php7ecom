<?php

class Database
{
    private $connection;
    private $stmt;

    public function __construct($dsn, $username,  $password)
    {
        $this->connection = new PDO($dsn, $username,  $password);
        $this->connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    }

    public function insert($table, $data){
        $placeholders = [];

        foreach ($data as $key => $value) {
            $placeholders[] = ':' . $key;
        }

        $query = 'INSERT INTO ' . $table . ' (' . implode(',', array_keys($data)) . ') VALUES (' . implode(',', $placeholders) . ')';        
        $stmt = $this->connection->prepare($query);

        foreach ($data as $placeholder => $val) {
            $stmt->bindValue(':' . $placeholder, $val);
        }

        return $stmt->execute();

    }


    public function select($table, $columns = '*', $data = [])
    {
        $query = 'SELECT ' . $columns . ' FROM ' . $table;

        if (!empty($data)) {
            $string = [];

            foreach ($data as $key => $value) {
                $string[] = "`{$key}` = :{$key}";
            }
            
            $query .= ' WHERE ' . implode(',', $string);
        }

        $this->stmt = $this->connection->prepare($query);

        foreach ($data as $placeholder => $val) {
            $this->stmt->bindParam(':' . $placeholder, $val);
        }

        return $this->stmt;
    }

    // public function count(){
    //     $this->stmt->execute();
    //     return $this->stmt->rowCount();
    // }

    // public function find(){
    //     $this->stmt->execute();
    //     return $this->stmt->fetch();
    // }

    // public function findAll(){
    //     $this->stmt->execute();
    //     return $this->stmt->fetchAll();
    // }

    public function where($data = [])
    {
    }

    public function update($id)
    {
    }

    public function delete($id)
    {
    }
}

define('DSN', 'mysql:dbname=php7ecom;host=localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');

$connection = new Database(DSN, DB_USERNAME, DB_PASSWORD);
