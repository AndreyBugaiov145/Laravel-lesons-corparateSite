<?php

namespace App\Repositories;

use App\Portfolio;
use App\Repositories\Repository;

class PortfoliosRepositiry extends Repository {

    public function __construct(Portfolio $portfolio)
    {
        $this->modal = $portfolio;
    }

}