<?php

namespace App\Http\Controllers;

use App\Article;
use App\Filter;
use App\Menu;
use App\Repositories\ArticlesRepositiry;
use App\Repositories\MenusRepositiry;
use App\Repositories\PortfoliosRepositiry;
use App\Repositories\SlidersRepositiry;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\SiteController;

class IndexController extends SiteController
{
    public function __construct(SlidersRepositiry $s_rep, PortfoliosRepositiry $p_rep, ArticlesRepositiry $a_rep)
    {
        parent::__construct(new MenusRepositiry(new Menu()));
        $this->template = env('THEME') . '.index';
        $this->bar = 'right';
        $this->s_rep = $s_rep;
        $this->p_rep = $p_rep;
        $this->a_rep = $a_rep;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $partfolios = $this->getPortfolio();
        $content = view(env('THEME') . '.content', ['partfolios' => $partfolios])->render();
        $this->vars = array_add($this->vars, 'content', $content);

        $sliderItems = $this->getSliders();
        $slider = view(env('THEME') . '.slider')->with('sliders', $sliderItems)->render();
        $this->vars = array_add($this->vars, 'slider', $slider);

        $articles = $this->getArticles();
        $this->contentRightBar = view(env('THEME') . '.indexbar')->with('articles', $articles)->render();

        $this->keywords = 'Home Page';
        $this->title = 'Home Page';
        $this->meta_desc = 'Home Page';

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
    public function show($id)
    {
        //
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

    public function getSliders()
    {
        $sliders = $this->s_rep->get();
        if ($sliders->isEmpty()) {
            return false;
        }
        $sliders->transform(function ($item, $key) {
            $item->img = config('settings.slider_path') . '/' . $item->img;
            return $item;
        });

        return $sliders;
    }

    protected function getPortfolio()
    {
        $portfolio = $this->p_rep->get('*', config('settings.home_port_count'));

        return $portfolio;
    }

    protected function getArticles()
    {
        $articles = $this->a_rep->get(['title', 'img', 'created_at', 'alias'], config('settings.home_articles_count'));

        return $articles;
    }
}
