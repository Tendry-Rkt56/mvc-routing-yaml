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
          try {
               $this->conn = new \PDO("mysql:host=".$host.";dbname=".$dbName.";charset=utf8", $user, $password);     
               $this->conn->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
          }
          catch(\PDOException $e){
               echo "Erreur de connexion à la base de données : " . $e->getMessage();
          }
     }

     public function getDb(): \PDO
     {
          return $this->conn;
     }

}