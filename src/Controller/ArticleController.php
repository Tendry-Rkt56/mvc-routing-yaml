<?php

namespace App\Controller;

class ArticleController extends Controller
{

     public function index()
     {
          return $this->render('articles.index', [], true);
     }

     public function show(int $id)
     {
          return $this->render('articles.show', [
               'id' => $id,
          ], true);
     }

}