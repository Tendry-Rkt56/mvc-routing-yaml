<?php

namespace App\Entity;

class Article extends Entity
{

     public function findAll()
     {
          $query = "SELECT * FROM articles WHERE id > 0";
          return $this->db->getDb()->query($query)->fetchAll(\PDO::FETCH_OBJ);
     }

}