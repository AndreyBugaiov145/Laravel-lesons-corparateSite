<?php

use Illuminate\Database\Seeder;
use App\User;

class Users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::create(
            [
                'name'=>'andrey',
                'email'=>'andrey.andrey@gmail.com',
                'password'=>'12345'
            ]);

        User::create(
            [
                'name'=>'sergey',
                'email'=>'sergey.sergey@gmail.com',
                'password'=>'12345'
            ]);

    }
}
