<?php

namespace App\Http\Controllers;

use App\Menu;
use App\Repositories\ArticlesRepositiry;
use App\Repositories\CommentsRepositiry;
use App\Repositories\MenusRepositiry;
use App\Repositories\PortfoliosRepositiry;
use Illuminate\Http\Request;

class PortfoliosController extends SiteController
{

    public function __construct(PortfoliosRepositiry $p_rep)
    {
        parent::__construct(new MenusRepositiry(new Menu()));
        $this->template = env('THEME') . '.portfolios';
        $this->p_rep = $p_rep;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->title = 'Портфолио';
        $this->keywords = 'Портфолио';
        $this->meta_desc = 'Портфолио';

        $portfolios = $this->getPortfolios();

        $content = view(env('THEME') . '.content_portfolios',['portfolios'=>$portfolios]);
        $this->vars = array_add($this->vars, 'content', $content);

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

    public function getPortfolios()
    {
        $portfolios = $this->p_rep->get('*', false, true);
        if (!$portfolios->isEmpty()) {
            $portfolios->load('filter');
        }

        return $portfolios;
    }
}
