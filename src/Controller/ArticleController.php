<?php

namespace App\Controller;

class ArticleController extends Controller
{

     public function index()
     {
          return $this->render('articles.index');
     }

}