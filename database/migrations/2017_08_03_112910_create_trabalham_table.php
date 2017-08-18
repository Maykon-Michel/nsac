<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrabalhamTable extends Migration
{
    
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('alunos')->create('trabalham', function (Blueprint $table) {
            $table->char('matricula', 7)->primary();
            $table->integer('jornada_diaria')->nullable();
            $table->integer('periodo')->nullable();
            $table->string('cargo', 50)->nullable();
            $table->integer('renda_mensal')->nullable();
            $table->integer('empresa')->nullable();
            $table->integer('auxilia_financeiramente')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('alunos')->dropIfExists('trabalham');
    }
}
