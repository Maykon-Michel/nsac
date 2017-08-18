<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEscolasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('escolas', function (Blueprint $table) {
            $table->char('cod_escola',8)->nullable();
            $table->char('nome',100)->nullable();
            $table->integer('rede')->nullable();
            $table->char('email', 60)->nullable();
            $table->increments('codigo');
            $table->integer('cidade')->nullable();
            $table->boolean('ativo')->nullable()->default(true);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('escolas');
    }
}
