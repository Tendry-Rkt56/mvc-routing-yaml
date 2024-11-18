<?php

namespace App\Controller;

class ErrorController extends Controller
{

     public function index()
     {
          return $this->render('error.error');
     }

}