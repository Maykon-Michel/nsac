<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDisciplinasAdaptacaoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('disciplinas_adaptacao', function (Blueprint $table) {
            $table->increments('id');
            $table->char('aluno',7)->nullable();
            $table->integer('disciplina')->nullable();
            $table->integer('situacao')->nullable()->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('disciplinas_adaptacao');
    }
}
