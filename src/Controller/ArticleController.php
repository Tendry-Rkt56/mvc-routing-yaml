<?php

namespace App\Controller;

// use App\Entity\Article;
// use App\Manager;

class ArticleController extends Controller
{

     public function index()
     {
          // $articles = Manager::get()->getEntity(Article::class)->findAll();
          // return $this->render('articles.index', [
          //      'articles' => $articles,
          // ], true);
          return $this->render('articles.index', [], true);
     }

     public function show(int $id)
     {
          return $this->render('articles.show', [
               'id' => $id,
          ], true);
     }

}