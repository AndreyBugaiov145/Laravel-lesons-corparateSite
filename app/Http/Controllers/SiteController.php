<?php

namespace App\Http\Controllers;

use Menu;
use App\Repositories\MenusRepositiry;
use Illuminate\Http\Request;
use App\Menu as Munus;

class SiteController extends Controller
{
    protected $p_rep;
    protected $s_rep;
    protected $a_rep;
    protected $m_rep;

    protected $template;
    protected $vars=[];

    protected $keywords;
    protected $title;
    protected $meta_desc;

    protected $contentRightBar = false;
    protected $contentLeftBar = false;
    protected $bar = 'no';

    public function __construct(MenusRepositiry $m_rep)
    {
        $this->m_rep = $m_rep;
    }

    protected function renderOutput(){

        $menu = $this->getMenu();
        $navigation =  view(env('THEME').'.navigation',['menu'=>$menu])->render();
        $this->vars = array_add($this->vars,'navigation',$navigation);

        if ($this->contentRightBar){
            $rightBar = view(env('THEME').'.rightBar')->with('contentRightBar',$this->contentRightBar)->render();
            $this->vars = array_add($this->vars,'rightBar',$rightBar);
        }
        if ($this->contentLeftBar){
            $leftBar = view(env('THEME').'.leftBar')->with('contentLeftBar',$this->contentLeftBar)->render();
            $this->vars = array_add($this->vars,'leftBar',$leftBar);
        }
        $this->vars = array_add($this->vars,'bar',$this->bar);

        $footer = view(env('THEME').'.footer')->render();
        $this->vars = array_add($this->vars,'footer',$footer);

        $this->vars = array_add($this->vars,'keywords',$this->keywords);
        $this->vars = array_add($this->vars,'title',$this->title);
        $this->vars = array_add($this->vars,'meta_desc',$this->meta_desc);

        return view($this->template)->with($this->vars);
    }

    protected function getMenu(){
        $menu = $this->m_rep->get();

        $mBuilder = Menu::make('MyNav',function ($m)use($menu){
            foreach($menu as $item){
                if($item->parent == 0){
                    $m->add($item->title,$item->path)->id($item->id);
                }else{
                    if($m->find($item->parent)){
                        $m->find($item->parent)->add($item->title,$item->path)->id($item->id);
                    }
                }
            }

        });

        return $mBuilder;
    }
}
