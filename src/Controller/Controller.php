<?php

namespace App\Controller;

class Controller
{

     protected function render(string $view)
     {
          require_once '../src/templates/'.str_replace('.', '/', $view).'.html';
     }

}