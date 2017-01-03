<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLabels extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('labels', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('healthy')->nullable();
            $table->boolean('fattening')->nullable();
            $table->boolean('vegetables')->nullable();
            $table->boolean('meat')->nullable();
            $table->boolean('easy')->nullable();
            $table->boolean('difficult')->nullable();

            $table->integer('post_id')->unsigned();
            $table->timestamps();

            $table->foreign('post_id')
                ->references('id')->on('posts')
                ->onDelete('cascade')
                ->onUpdate('no action');


        });

            }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('labels');
    }
}
