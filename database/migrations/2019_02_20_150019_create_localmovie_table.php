<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLocalmovieTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('localmovie', function (Blueprint $table) {
            $table->integer('id_movies')->unsigned();
            $table->foreign('id_movies')->references('id')->on('movies')->onDelete('cascade');

            $table->integer('id_local')->unsigned();
            $table->foreign('id_local')->references('id_local')->on('local')->onDelete('cascade');
            $table->integer('stock')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('localmovie');
    }
}
