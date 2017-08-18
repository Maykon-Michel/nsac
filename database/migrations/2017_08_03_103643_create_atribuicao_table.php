<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAtribuicaoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('atribuicao', function (Blueprint $table) {
            $table->increments('codigo');
            $table->integer('professor')->nullable();
            $table->date('data_inicial')->nullable();
            $table->date('data_final')->nullable();
            $table->integer('hae')->nullable();
            $table->integer('ha')->nullable();
            $table->integer('coord')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('atribuicao');
    }
}
