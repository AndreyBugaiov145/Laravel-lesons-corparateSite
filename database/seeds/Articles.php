<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Articles extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles')->insert([
                [
                    'title'=>'article title 1',
                    'text'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea, dignissimos asperiores autem quidem perferendis earum aut? Odio odit voluptatem veritatis possimus ex reiciendis quisquam, deserunt minima ullam necessitatibus maxime quas dolores, omnis! Rerum dolorum architecto neque nisi, dolores natus fugiat delectus sint quidem doloremque molestias esse, similique optio fuga impedit incidunt voluptatum nesciunt. Asperiores nihil maiores dolorem numquam architecto. Exercitationem ipsum laudantium illo ullam placeat voluptatem soluta porro similique, ad modi qui voluptatum consequuntur, repellat, possimus. Fugiat beatae quis voluptas!',
                    'desc'=>'incidunt voluptatum nesciunt. Asperiores nihil maiores dolorem numquam architecto. Exercitationem ipsum laudantium illo ullam placeat voluptatem soluta porro similique, ad modi qui voluptatum consequuntur, repellat, possimus. Fugiat beatae quis voluptas!',
                    'alias'=>'article-1',
                    'img'=>'{"mini":"0061-175x175.jpg","max":"0061-770x368.jpg","path":0081-700x345.jpg}',
                    'category_id'=>1,
                    'user_id'=>1
                ],
                [
                    'title'=>'article title 2',
                    'text'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea, dignissimos asperiores autem quidem perferendis earum aut? Odio odit voluptatem veritatis possimus ex reiciendis quisquam, deserunt minima ullam necessitatibus maxime quas dolores, omnis! Rerum dolorum architecto neque nisi, dolores natus fugiat delectus sint quidem doloremque molestias esse, similique optio fuga impedit incidunt voluptatum nesciunt. Asperiores nihil maiores dolorem numquam architecto. Exercitationem ipsum laudantium illo ullam placeat voluptatem soluta porro similique, ad modi qui voluptatum consequuntur, repellat, possimus. Fugiat beatae quis voluptas!',
                    'desc'=>'incidunt voluptatum nesciunt. Asperiores nihil maiores dolorem numquam architecto. Exercitationem ipsum laudantium illo ullam placeat voluptatem soluta porro similique, ad modi qui voluptatum consequuntur, repellat, possimus. Fugiat beatae quis voluptas!',
                    'alias'=>'article-2',
                    'img'=>'{"mini":"0061-175x175.jpg","max":"0061-770x368.jpg","path":0081-700x345.jpg}',
                    'category_id'=>2,
                    'user_id'=>2
                ],
                [
                    'title'=>'article title 3',
                    'text'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea, dignissimos asperiores autem quidem perferendis earum aut? Odio odit voluptatem veritatis possimus ex reiciendis quisquam, deserunt minima ullam necessitatibus maxime quas dolores, omnis! Rerum dolorum architecto neque nisi, dolores natus fugiat delectus sint quidem doloremque molestias esse, similique optio fuga impedit incidunt voluptatum nesciunt. Asperiores nihil maiores dolorem numquam architecto. Exercitationem ipsum laudantium illo ullam placeat voluptatem soluta porro similique, ad modi qui voluptatum consequuntur, repellat, possimus. Fugiat beatae quis voluptas!',
                    'desc'=>'incidunt voluptatum nesciunt. Asperiores nihil maiores dolorem numquam architecto. Exercitationem ipsum laudantium illo ullam placeat voluptatem soluta porro similique, ad modi qui voluptatum consequuntur, repellat, possimus. Fugiat beatae quis voluptas!',
                    'alias'=>'article-3',
                    'img'=>'{"mini":"0061-175x175.jpg","max":"0061-770x368.jpg","path":0081-700x345.jpg}',
                    'category_id'=>3,
                    'user_id'=>1
                ],
                [
                    'title'=>'article title 4',
                    'text'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea, dignissimos asperiores autem quidem perferendis earum aut? Odio odit voluptatem veritatis possimus ex reiciendis quisquam, deserunt minima ullam necessitatibus maxime quas dolores, omnis! Rerum dolorum architecto neque nisi, dolores natus fugiat delectus sint quidem doloremque molestias esse, similique optio fuga impedit incidunt voluptatum nesciunt. Asperiores nihil maiores dolorem numquam architecto. Exercitationem ipsum laudantium illo ullam placeat voluptatem soluta porro similique, ad modi qui voluptatum consequuntur, repellat, possimus. Fugiat beatae quis voluptas!',
                    'desc'=>'incidunt voluptatum nesciunt. Asperiores nihil maiores dolorem numquam architecto. Exercitationem ipsum laudantium illo ullam placeat voluptatem soluta porro similique, ad modi qui voluptatum consequuntur, repellat, possimus. Fugiat beatae quis voluptas!',
                    'alias'=>'article-4',
                    'img'=>'{"mini":"0061-175x175.jpg","max":"0061-770x368.jpg","path":0081-700x345.jpg}',
                    'category_id'=>1,
                    'user_id'=>2
                ],
                [
                    'title'=>'article title 5',
                    'text'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea, dignissimos asperiores autem quidem perferendis earum aut? Odio odit voluptatem veritatis possimus ex reiciendis quisquam, deserunt minima ullam necessitatibus maxime quas dolores, omnis! Rerum dolorum architecto neque nisi, dolores natus fugiat delectus sint quidem doloremque molestias esse, similique optio fuga impedit incidunt voluptatum nesciunt. Asperiores nihil maiores dolorem numquam architecto. Exercitationem ipsum laudantium illo ullam placeat voluptatem soluta porro similique, ad modi qui voluptatum consequuntur, repellat, possimus. Fugiat beatae quis voluptas!',
                    'desc'=>'incidunt voluptatum nesciunt. Asperiores nihil maiores dolorem numquam architecto. Exercitationem ipsum laudantium illo ullam placeat voluptatem soluta porro similique, ad modi qui voluptatum consequuntur, repellat, possimus. Fugiat beatae quis voluptas!',
                    'alias'=>'article-5',
                    'img'=>'{"mini":"0061-175x175.jpg","max":"0061-770x368.jpg","path":0081-700x345.jpg}',
                    'category_id'=>4,
                    'user_id'=>1
                ],
                [
                    'title'=>'article title 6',
                    'text'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea, dignissimos asperiores autem quidem perferendis earum aut? Odio odit voluptatem veritatis possimus ex reiciendis quisquam, deserunt minima ullam necessitatibus maxime quas dolores, omnis! Rerum dolorum architecto neque nisi, dolores natus fugiat delectus sint quidem doloremque molestias esse, similique optio fuga impedit incidunt voluptatum nesciunt. Asperiores nihil maiores dolorem numquam architecto. Exercitationem ipsum laudantium illo ullam placeat voluptatem soluta porro similique, ad modi qui voluptatum consequuntur, repellat, possimus. Fugiat beatae quis voluptas!',
                    'desc'=>'incidunt voluptatum nesciunt. Asperiores nihil maiores dolorem numquam architecto. Exercitationem ipsum laudantium illo ullam placeat voluptatem soluta porro similique, ad modi qui voluptatum consequuntur, repellat, possimus. Fugiat beatae quis voluptas!',
                    'alias'=>'article-6',
                    'img'=>'{"mini":"0061-175x175.jpg","max":"0061-770x368.jpg","path":0081-700x345.jpg}',
                    'category_id'=>2,
                    'user_id'=>2
                ],
                [
                    'title'=>'article title 7',
                    'text'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea, dignissimos asperiores autem quidem perferendis earum aut? Odio odit voluptatem veritatis possimus ex reiciendis quisquam, deserunt minima ullam necessitatibus maxime quas dolores, omnis! Rerum dolorum architecto neque nisi, dolores natus fugiat delectus sint quidem doloremque molestias esse, similique optio fuga impedit incidunt voluptatum nesciunt. Asperiores nihil maiores dolorem numquam architecto. Exercitationem ipsum laudantium illo ullam placeat voluptatem soluta porro similique, ad modi qui voluptatum consequuntur, repellat, possimus. Fugiat beatae quis voluptas!',
                    'desc'=>'incidunt voluptatum nesciunt. Asperiores nihil maiores dolorem numquam architecto. Exercitationem ipsum laudantium illo ullam placeat voluptatem soluta porro similique, ad modi qui voluptatum consequuntur, repellat, possimus. Fugiat beatae quis voluptas!',
                    'alias'=>'article-7',
                    'img'=>'{"mini":"0061-175x175.jpg","max":"0061-770x368.jpg","path":0081-700x345.jpg}',
                    'category_id'=>1,
                    'user_id'=>1
                ],
                [
                    'title'=>'article title 8',
                    'text'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea, dignissimos asperiores autem quidem perferendis earum aut? Odio odit voluptatem veritatis possimus ex reiciendis quisquam, deserunt minima ullam necessitatibus maxime quas dolores, omnis! Rerum dolorum architecto neque nisi, dolores natus fugiat delectus sint quidem doloremque molestias esse, similique optio fuga impedit incidunt voluptatum nesciunt. Asperiores nihil maiores dolorem numquam architecto. Exercitationem ipsum laudantium illo ullam placeat voluptatem soluta porro similique, ad modi qui voluptatum consequuntur, repellat, possimus. Fugiat beatae quis voluptas!',
                    'desc'=>'incidunt voluptatum nesciunt. Asperiores nihil maiores dolorem numquam architecto. Exercitationem ipsum laudantium illo ullam placeat voluptatem soluta porro similique, ad modi qui voluptatum consequuntur, repellat, possimus. Fugiat beatae quis voluptas!',
                    'alias'=>'article-8',
                    'img'=>'{"mini":"0061-175x175.jpg","max":"0061-770x368.jpg","path":0081-700x345.jpg}',
                    'category_id'=>3,
                    'user_id'=>1
                ],
            ]
        );
    }
}
