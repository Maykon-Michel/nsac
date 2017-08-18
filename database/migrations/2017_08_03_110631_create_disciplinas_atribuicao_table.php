<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDisciplinasAtribuicaoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('disciplinas_atribuicao', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('atribuicao')->nullable();
            $table->integer('disciplina')->nullable();
            $table->integer('aulas')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('disciplinas_atribuicao');
    }
}
