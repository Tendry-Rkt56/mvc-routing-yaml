<?php

namespace App;

class Manager
{

     private static $_instance;

     public static function get()
     {
          if (self::$_instance == null) self::$_instance = new self();
          return self::$_instance;
     }


}