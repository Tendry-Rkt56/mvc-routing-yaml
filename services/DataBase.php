<?php

namespace Services;

class DataBase
{

     private $conn;

     public function __construct()
     {
          LoaderFile::set("constante", '../config/Constante.yaml');
          $constante = LoaderFile::get("constante")['database'];
          extract($constante);
          $this->conn = new \PDO('mysql:host='.$host.";dbname=".$dbName.";charset=$charset", $user, $password);     
     }

     public function getDb(): \PDO
     {
          return $this->conn;
     }

}