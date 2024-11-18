<?php

namespace App\Controller;

class Controller
{

     public function __construct()
     {
          if (session_status() == PHP_SESSION_NONE) session_start();
     }

     protected function render(string $view, array $data = [], bool $html = false)
     {
          extract($data);
          $extension = $html ? '.html.php' : '.html';
          require_once '../src/templates/'.str_replace('.', '/', $view)."$extension";
     }

}