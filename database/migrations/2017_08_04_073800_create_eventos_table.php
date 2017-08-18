<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventosTable extends Migration
{
    protected $connection = "calendario";
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('calendario')->create('eventos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('descricao', 50)->nullable();
            $table->date('data_inicio')->nullable();
            $table->date('data_fim')->nullable();
            $table->string('cor', 10)->nullable();
            $table->integer('prioridade')->nullable();
            $table->boolean('oficial')->default(true);
            $table->integer('atividades')->nullable();
            $table->boolean('dia_letivo')->default(true);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('calendario')->dropIfExists('eventos');
    }
}
