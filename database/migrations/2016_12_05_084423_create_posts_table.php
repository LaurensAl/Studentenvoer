<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
        {
     Schema::create('posts', function (Blueprint $table) {
         $table->increments('id');
         $table->string('title', 255);
         $table->text('description');
         $table->text('content');
         $table->text('foto');
         $table->text('ingredients');
         $table->string('slug')->nullable();
         $table->tinyInteger('status')->default(1);
         $table->integer('user_id');
         $table->timestamps();


         });
         }



     public function down()
     {
         Schema::drop('posts');
     }
}

