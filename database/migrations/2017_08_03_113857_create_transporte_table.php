<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransporteTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('alunos')->create('transporte', function (Blueprint $table) {
            $table->integer('distancia')->nullable();
            $table->boolean('comunitario')->nullable();
            $table->integer('tipo')->nullable();
            $table->string('aluno', 7)->primary();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('alunos')->dropIfExists('transporte');
    }
}
