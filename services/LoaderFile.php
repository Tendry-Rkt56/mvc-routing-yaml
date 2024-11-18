<?php

namespace Services;

use Symfony\Component\Yaml\Yaml;

class LoaderFile 
{

     private static $config = [];

     public static function set(string $key, mixed $path)
     {
          self::$config[$key] = Yaml::parseFile($path); 
     }

     public static function get(string $key)
     {
          return self::$config[$key] ?? null;
     }

}