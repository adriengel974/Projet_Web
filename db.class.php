<?php
class DB{
    private $host = 'localhost';
    private $username = 'root';
    private $pwd = 'root';
    private $database = 'products';
    private $db;

    public function __construct($host = null, $username = null, $pwd = null, $database = null){
        if($host != null){
            $this->host = $host;
            $this->username = $username;
            $this->pwd = $pwd;
            $this->database = $database;
        }
        try {
            $this->db = new PDO('mysql:host='.$this->host.';dbname='.$this->database, $this->username, $this->pwd, array(
                PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8',
                PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
            ));
        } catch(PDOExeption $e) {
            die('Une erreur s\'est produite');
        }
    }
}
