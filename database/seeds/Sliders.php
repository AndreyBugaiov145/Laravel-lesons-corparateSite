<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Sliders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sliders')->insert([
            [
                'img'=>'xx.jpg',
                'title'=>'<h2>Title 1</h2>',
                'desc'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea, dignissimos asperiores autem quidem perferendis earum aut? Odio odit voluptatem veritatis possimus ex reiciendis quisquam, deserunt minima ullam necessitatibus maxime quas dolores, omnis! Rerum dolorum architecto neque nisi, dolores natus fugiat delectus sint quidem doloremque molestias esse,'
            ],
            [
                'img'=>'00314.jpg',
                'title'=>'<h2>Title 2</h2>',
                'desc'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea, dignissimos asperiores autem quidem perferendis earum aut? Odio odit voluptatem veritatis possimus ex reiciendis quisquam, deserunt minima ullam necessitatibus maxime quas dolores, omnis! Rerum dolorum architecto neque nisi, dolores natus fugiat delectus sint quidem doloremque molestias esse,'
            ],
            [
                'img'=>'dd.jpg',
                'title'=>'<h2>Title 3</h2>',
                'desc'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea, dignissimos asperiores autem quidem perferendis earum aut? Odio odit voluptatem veritatis possimus ex reiciendis quisquam, deserunt minima ullam necessitatibus maxime quas dolores, omnis! Rerum dolorum architecto neque nisi, dolores natus fugiat delectus sint quidem doloremque molestias esse,'
            ],
        ]);
    }
}
