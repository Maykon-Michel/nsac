<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFuncoesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('funcoes', function (Blueprint $table) {
            $table->increments('codigo');
            $table->string('descricao', 30)->nullable();
            $table->string('abreviacao', 20)->nullable();
            $table->string('descricao_feminino', 30)->nullable();
            $table->string('abreviacao_feminino', 20)->nullable();
            $table->integer('tipo')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('funcoes');
    }
}
