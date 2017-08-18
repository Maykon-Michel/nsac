<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstudosTable extends Migration
{
    
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('alunos')->create('estudos', function (Blueprint $table) {
            $table->char('aluno', 7)->primary();
            $table->integer('ensino_f')->nullable()->default(0);
            $table->integer('em_1')->nullable();
            $table->integer('em_2')->nullable();
            $table->integer('em_3')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('alunos')->dropIfExists('estudos');
    }
}
