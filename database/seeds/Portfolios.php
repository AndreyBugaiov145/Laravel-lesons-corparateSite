<?php

use Illuminate\Database\Seeder;
use App\Portfolio;

class Portfolios extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Portfolio::create(
            [
                'title'=>'Steep This!',
                'text'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea, dignissimos asperiores autem quidem perferendis earum aut? Odio odit voluptatem veritatis possimus ex reiciendis quisquam, deserunt minima ullam necessitatibus maxime quas dolores, omnis! Rerum dolorum architecto neque nisi, dolores natus fugiat delectus sint quidem doloremque molestias esse, similique optio fuga impedit incidunt voluptatum nesciunt. Asperiores nihil maiores dolorem numquam architecto. Exercitationem ipsum laudantium illo ullam placeat voluptatem soluta porro similique, ad modi qui voluptatum consequuntur, repellat, possimus. Fugiat beatae quis voluptas!',
                'customer'=>'Steep This',
                'alias'=>'project0',
                'img'=>'{"mini":"0061-175x175.jpg","max":"0061-770x368.jpg","path":0081-700x345.jpg}',
                'filter_alias'=>'brand-itantly'
            ]);

        Portfolio::create(
            [
                'title'=>'Steep This!',
                'text'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea, dignissimos asperiores autem quidem perferendis earum aut? Odio odit voluptatem veritatis possimus ex reiciendis quisquam, deserunt minima ullam necessitatibus maxime quas dolores, omnis! Rerum dolorum architecto neque nisi, dolores natus fugiat delectus sint quidem doloremque molestias esse, similique optio fuga impedit incidunt voluptatum nesciunt. Asperiores nihil maiores dolorem numquam architecto. Exercitationem ipsum laudantium illo ullam placeat voluptatem soluta porro similique, ad modi qui voluptatum consequuntur, repellat, possimus. Fugiat beatae quis voluptas!',
                'customer'=>'Steep This',
                'alias'=>'project1',
                'img'=>'{"mini":"0061-175x175.jpg","max":"0061-770x368.jpg","path":0081-700x345.jpg}',
                'filter_alias'=>'brand-itantly'
            ]);

        Portfolio::create(
            [
                'title'=>'Love',
                'text'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea, dignissimos asperiores autem quidem perferendis earum aut? Odio odit voluptatem veritatis possimus ex reiciendis quisquam, deserunt minima ullam necessitatibus maxime quas dolores, omnis! Rerum dolorum architecto neque nisi, dolores natus fugiat delectus sint quidem doloremque molestias esse, similique optio fuga impedit incidunt voluptatum nesciunt. Asperiores nihil maiores dolorem numquam architecto. Exercitationem ipsum laudantium illo ullam placeat voluptatem soluta porro similique, ad modi qui voluptatum consequuntur, repellat, possimus. Fugiat beatae quis voluptas!',
                'customer'=>'costomer',
                'alias'=>'project2',
                'img'=>'{"mini":"0061-175x175.jpg","max":"0061-770x368.jpg","path":0081-700x345.jpg}',
                'filter_alias'=>'brand-itantly'
            ]);

        Portfolio::create(
            [
                'title'=>'Cuanacos',
                'text'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea, dignissimos asperiores autem quidem perferendis earum aut? Odio odit voluptatem veritatis possimus ex reiciendis quisquam, deserunt minima ullam necessitatibus maxime quas dolores, omnis! Rerum dolorum architecto neque nisi, dolores natus fugiat delectus sint quidem doloremque molestias esse, similique optio fuga impedit incidunt voluptatum nesciunt. Asperiores nihil maiores dolorem numquam architecto. Exercitationem ipsum laudantium illo ullam placeat voluptatem soluta porro similique, ad modi qui voluptatum consequuntur, repellat, possimus. Fugiat beatae quis voluptas!',
                'customer'=>'Steep This',
                'alias'=>'project3',
                'img'=>'{"mini":"0061-175x175.jpg","max":"0061-770x368.jpg","path":0081-700x345.jpg}',
                'filter_alias'=>'brand-itantly'
            ]);

        Portfolio::create(
            [
                'title'=>'Nili studios',
                'text'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea, dignissimos asperiores autem quidem perferendis earum aut? Odio odit voluptatem veritatis possimus ex reiciendis quisquam, deserunt minima ullam necessitatibus maxime quas dolores, omnis! Rerum dolorum architecto neque nisi, dolores natus fugiat delectus sint quidem doloremque molestias esse, similique optio fuga impedit incidunt voluptatum nesciunt. Asperiores nihil maiores dolorem numquam architecto. Exercitationem ipsum laudantium illo ullam placeat voluptatem soluta porro similique, ad modi qui voluptatum consequuntur, repellat, possimus. Fugiat beatae quis voluptas!',
                'customer'=>'Nili',
                'alias'=>'project4',
                'img'=>'{"mini":"0061-175x175.jpg","max":"0061-770x368.jpg","path":0081-700x345.jpg}',
                'filter_alias'=>'brand-itantly'
            ]);

        Portfolio::create(
            [
                'title'=>'Vlate Premium!',
                'text'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea, dignissimos asperiores autem quidem perferendis earum aut? Odio odit voluptatem veritatis possimus ex reiciendis quisquam, deserunt minima ullam necessitatibus maxime quas dolores, omnis! Rerum dolorum architecto neque nisi, dolores natus fugiat delectus sint quidem doloremque molestias esse, similique optio fuga impedit incidunt voluptatum nesciunt. Asperiores nihil maiores dolorem numquam architecto. Exercitationem ipsum laudantium illo ullam placeat voluptatem soluta porro similique, ad modi qui voluptatum consequuntur, repellat, possimus. Fugiat beatae quis voluptas!',
                'customer'=>'This',
                'alias'=>'project5',
                'img'=>'{"mini":"0061-175x175.jpg","max":"0061-770x368.jpg","path":0081-700x345.jpg}',
                'filter_alias'=>'brand-itantly'
            ]);

    }
}
