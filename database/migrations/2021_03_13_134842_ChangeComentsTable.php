<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeComentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('coments', function (Blueprint $table) {
            //
            $table->integer('article_id')->unsigned()->default(1);
            $table->foreign('article_id')->references('id')->on('articles');

            $table->integer('user_id')->unsigned()->nullable();
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('coments', function (Blueprint $table) {
           //$table->dropColumn(['user_id', 'article_id']);
        });
    }
}
