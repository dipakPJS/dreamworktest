<?php

// DataConn trait for database connection -----

trait DataConn
{
    private $host = 'localhost';
    private $dbname = 'scandProject';
    private $user = 'root';
    private $password = '';

    public function connect()
    {
        try {
            $dsn = "mysql:host=$this->host;dbname=$this->dbname";
            $pdo = new PDO($dsn, $this->user, $this->password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            return $pdo;
        } catch (PDOException $error) {
            echo 'Connection Error '.$error->getMessage();
        }
    }
}
