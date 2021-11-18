<?php

namespace App\Http\Controllers;

use App\Category;
use App\Menu;
use App\Repositories\ArticlesRepositiry;
use App\Repositories\MenusRepositiry;
use App\Repositories\PortfoliosRepositiry;
use App\Repositories\CommentsRepositiry;
use App\Repositories\SlidersRepositiry;
use Illuminate\Http\Request;
use App\Http\Controllers\SiteController;

class ArticlesController extends SiteController
{
    public function __construct(PortfoliosRepositiry $p_rep, ArticlesRepositiry $a_rep, CommentsRepositiry $c_rep)
    {
        parent::__construct(new MenusRepositiry(new Menu()));
        $this->template = env('THEME') . '.articles';
        $this->bar = 'right';
        $this->p_rep = $p_rep;
        $this->a_rep = $a_rep;
        $this->c_rep = $c_rep;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($cat_alias = false)
    {
        $articles = $this->getArticles($cat_alias);
        $content = view(env('THEME') . '.articles_content', ['articles' => $articles])->render();
        $this->vars = array_add($this->vars, 'content', $content);

        $comments = $this->getComments(config('settings.recent_comments'));
        $portfolios = $this->getPortfoios(config('settings.recent_portfolios'));

        $this->contentRightBar = view(env('THEME') . '.articlesBar')->with(['comments' => $comments, 'portfolios' => $portfolios]);

        return $this->renderOutput();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($alias = false)
    {
        $article=$this->a_rep->one($alias,['comments'=>true]);
//dd($article->coments->groupBy('parant_id'));


        $this->title = $article->title;
        $this->keywords = $article->keywords;
        $this->meta_desc = $article->meta_desc;
        $content = view(env('THEME').'.article_content',['article'=>$article])->render();
        $this->vars = array_add( $this->vars,'content',$content);

        $comments = $this->getComments(config('settings.recent_comments'));
        $portfolios = $this->getPortfoios(config('settings.recent_portfolios'));
        $this->contentRightBar = view(env('THEME') . '.articlesBar')->with(['comments' => $comments, 'portfolios' => $portfolios]);

        return $this->renderOutput();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function getArticles($alias = false)
    {
        $where = false;
        if ($alias){
            $id = Category::select('id')->where('alias',$alias)->first()->id;
            $where = ['category_id'=>$id];
        }
        $articles = $this->a_rep->get('*', false, true,$where);
        if ($articles) {
            $articles->load('user', 'category', 'coments');
        }

        return $articles;
    }

    public function getComments($take)
    {
        $comments = $this->c_rep->get(['text', 'name', 'email', 'site', 'article_id', 'user_id'], $take);
        if ($comments) {
            $comments->load('user','article');
        }

        return $comments;
    }

    public function getPortfoios($take)
    {
        $portfolios = $this->p_rep->get(['text', 'title', 'alias', 'customer', 'img', 'filter_alias'], $take);

        return $portfolios;
    }
}
