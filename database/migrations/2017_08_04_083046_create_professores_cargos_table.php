<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfessoresCargosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('professores_cargos', function (Blueprint $table) {
            $table->increments('codigo');
            $table->integer('professor')->nullable();
            $table->integer('funcao')->nullable();
            $table->date('periodo_inicial')->nullable();
            $table->date('periodo_final')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('professores_cargos');
    }
}
