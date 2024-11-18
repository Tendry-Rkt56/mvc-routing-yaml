<?php

namespace App\Controller;

class Controller
{

     protected function render(string $view, array $data = [], bool $html = false)
     {
          extract($data);
          $extension = $html ? '.html.php' : '.html';
          require_once '../src/templates/'.str_replace('.', '/', $view)."$extension";
     }

}