<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMatriculaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('alunos')->create('matricula', function (Blueprint $table) {
            $table->increments('codigo');
            $table->integer('turma')->nullable();
            $table->integer('situacao')->nullable()->default(0);
            $table->integer('ordem')->nullable()->default(0);
            $table->date('data')->nullable()->default('NOW');
            $table->char('aluno', 7)->nullable();
            $table->smallInteger('gdae')->nullable()->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('alunos')->dropIfExists('matricula');
    }
}
