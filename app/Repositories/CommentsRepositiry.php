<?php

namespace App\Repositories;

use App\Coment;
use App\Repositories\Repository;

class CommentsRepositiry extends Repository {

    public function __construct(Coment $comment)
    {
        $this->modal = $comment;
    }
}