<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Menus extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('menus')->insert([
            [
                'title'=>'Главная',
                'path'=>'http://corporate.loc',
                'parent'=> 0
            ],
            [
                'title'=>'Блог>',
                'path'=>'http://corporate.loc/articles',
                'parent'=> 0
            ],
            [
                'title'=>'Компьютеры',
                'path'=>'http://corporate.loc/articles/cat/computers',
                'parent'=> 2
            ],
            [
                'title'=>'Интересы',
                'path'=>'http://corporate.loc/articles/cat/interests',
                'parent'=> 2
            ],
            [
                'title'=>'Советы',
                'path'=>'http://corporate.loc/articles/cat/soviti',
                'parent'=> 2
            ],
            [
                'title'=>'Портфолио',
                'path'=>'http://corporate.loc/portfolios',
                'parent'=> 0
            ],
            [
                'title'=>'Контакты',
                'path'=>'http://corporate.loc/contacts',
                'parent'=> 0
            ],
        ]);
    }
}
