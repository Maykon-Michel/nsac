<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCursosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cursos', function (Blueprint $table) {
            $table->string('id', 60)->nullable();
            $table->string('abreviacao', 30)->nullable();
            $table->increments('codigo');
            $table->integer('identificador')->nullable();
            $table->integer('tipo')->nullable();
            $table->smallInteger('ano_inicial')->nullable();
            $table->smallInteger('ano_final')->nullable();
            $table->string('ato_legal', 30)->nullable();
            $table->boolean('ativo')->defaulr(true);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cursos');
    }
}
