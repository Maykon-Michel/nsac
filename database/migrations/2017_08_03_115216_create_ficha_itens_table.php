<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFichaItensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ficha_itens', function (Blueprint $table) {
            $table->increments('codigo');
            $table->string('descricao',200);
            $table->string('tipo_component',50);
            $table->boolean('visivel')->default(true);
            $table->integer('grupo');
            $table->date('dt_inicio')->default('NOW');
            $table->date('dt_fim');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ficha_itens');
    }
}
