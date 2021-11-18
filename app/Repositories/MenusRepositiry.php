<?php

namespace App\Repositories;

use App\Menu;
use App\Repositories\Repository;

class MenusRepositiry extends Repository {

    public function __construct(Menu $menu)
    {
        $this->modal = $menu;
    }
}