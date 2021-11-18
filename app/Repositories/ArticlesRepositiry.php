<?php

namespace App\Repositories;

use App\Article;
use App\Repositories\Repository;

class ArticlesRepositiry extends Repository {

    public function __construct(Article $articles)
    {
        $this->modal = $articles;
    }

    public function one($alias,$attr = []){
        $article = parent::one($alias,$attr);
        if ($article){
            $article->img = json_decode($article->img);
        }

        if ($article && !empty($attr)){
            $article->load('coments');
            $article->coments->load('user');
        }

        return $article;
    }
}