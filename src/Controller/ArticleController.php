<?php

namespace App\Controller;

class ArticleController extends Controller
{

     public function index(?int $id = null)
     {
          return $this->render('articles.index');
     }

}