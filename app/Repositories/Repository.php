<?php

namespace App\Repositories;

use Config;

abstract class Repository
{

    protected $modal = false;

    public function get($select = '*', $take = false, $paginate = false, $where = false)
    {
        $bilder = $this->modal->select($select);
        if ($take) {
            $bilder->take($take);
        }
        if ($where) {
            $bilder->where($where);
        }

        if ($paginate) {
            return $this->check($bilder->paginate(config('settings.paginate')));
        }

        return $this->check($bilder->get());
    }

    protected function check($resualt)
    {
        if ($resualt->isEmpty()) {
            return false;
        }

        $resualt->transform(function ($item) {
            if (is_string($item->img) && is_object(json_decode($item->img)) && (json_last_error() == JSON_ERROR_NONE)) {
                $item->img = json_decode($item->img);
            }
            return $item;
        });

        return $resualt;
    }

    public function one($alias , $attr = [])
    {
        $result = $this->modal->where('alias', $alias)->first();

        return $result;
    }
}