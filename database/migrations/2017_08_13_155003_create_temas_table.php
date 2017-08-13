<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTemasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('temas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome', 30)->unique();
            $table->char('l5', 7);
            $table->char('l4', 7);
            $table->char('l3', 7);
            $table->char('l2', 7);
            $table->char('l1', 7);
            $table->char('c0', 7);
            $table->char('d1', 7);
            $table->char('d2', 7);
            $table->char('d3', 7);
            $table->char('d4', 7);
            $table->char('d5', 7);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('temas');
    }
}
