<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Categories extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
                ['title'=>'блог',
                    'alias'=>'blog',
                    'parent_id'=>0
                ],
                ['title'=>'компьютеры',
                    'alias'=>'computers',
                    'parent_id'=>0
                ]
                ,
                ['title'=>'Интересные',
                    'alias'=>'iterestig',
                    'parent_id'=>0
                ]
                ,
                ['title'=>'Советы',
                    'alias'=>'sovite',
                    'parent_id'=>0
                ]
            ]
        );
    }
}
