<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDisciplinasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('disciplinas', function (Blueprint $table) {
            $table->increments('id');
            $table->char('codigo', 2)->nullable()->unique();
            $table->string('descricao', 50)->nullable();
            $table->string('abreviacao', 30)->nullable();
            $table->integer('carga_horaria')->nullable();
            $table->integer('tipo')->default(0);
            $table->boolean('tem_turma')->default(false);
            $table->boolean('optativa')->default(false);
            $table->integer('turma')->nullable()->unique();
            $table->boolean('laboratorio')->default(false);
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
        Schema::dropIfExists('disciplinas');
    }
}
