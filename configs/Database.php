<?php
namespace configs;
date_default_timezone_set("Africa/Accra");
class Database {
    protected $db;
    function __construct(){
    $this->db = new \PDO ('mysql:host=localhost; port=8880; dbname=php_movie', 'root', 'root');
    $this->db->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_WARNING);
        
    }
   
}