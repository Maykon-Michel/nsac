<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfessoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('professores', function (Blueprint $table) {
            $table->increments('codigo');
            $table->string('nome',80)->nullable();
            $table->string('rg',15)->nullable();
            $table->integer('funcao')->nullable();
            $table->string('email', 40)->nullable();
            $table->integer('situacao')->nullable();
            $table->string('apelido', 30)->nullable();
            $table->integer('carga_horaria')->nullable();
            $table->integer('sexo')->nullable();
            $table->string('cpf', 11)->nullable();
            $table->integer('rd')->nullable()->default(0);
            $table->boolean('ativo')->default(true);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('professores');
    }
}
