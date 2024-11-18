<?php

namespace App\Controller;

class ArticleController extends Controller
{

     public function index()
     {
          return $this->render('articles.index');
     }

     public function show(int $id)
     {
          return $this->render('articles.show', [
               'id' => $id,
          ], true);
     }

}