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
            $table->char('codigo', 2)->nullable();
            $table->string('descricao', 50)->nullable();
            $table->string('abreviacao', 30)->nullable();
            $table->integer('carga_horaria')->nullable();
            $table->integer('tipo')->default(0);
            $table->boolean('tem_turma')->default(false);
            $table->boolean('optativa')->default(false);
            $table->integer('turma')->nullable();
            $table->boolean('laboratorio')->default(false);
            $table->boolean('ativo')->default(true);

            $table->unique(['codigo', 'turma']);
            $table->foreign('turma')
                ->references('codigo')->on('turmas')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('alunos')->dropIfExists('enderecos');
        Schema::connection('alunos')->dropIfExists('notas');
        Schema::connection('alunos')->dropIfExists('dados');
        Schema::dropIfExists('disciplinas');
    }
}
