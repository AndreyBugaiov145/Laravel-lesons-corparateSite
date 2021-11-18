<?php

namespace App\Repositories;

use App\Slider;
use App\Repositories\Repository;

class SlidersRepositiry extends Repository {

    public function __construct(Slider $slider)
    {
        $this->modal = $slider;
    }
}