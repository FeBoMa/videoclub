<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoluserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roluser', function (Blueprint $table) {
            
            $table->integer('id_rol')->unsigned();
            $table->foreign('id_rol')->references('id_rol')->on('rol')->onDelete('cascade');

            $table->integer('id_users')->unsigned();
            $table->foreign('id_users')->references('id')->on('users')->onDelete('cascade');
            
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
        Schema::dropIfExists('roluser');
    }
}
