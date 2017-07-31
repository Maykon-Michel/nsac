<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTurmasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('turmas', function (Blueprint $table) {
            $table->increments('codigo');
            $table->integer('ano')->nullable()->unique();
            $table->integer('ano_curso')->nullable()->unique();
            $table->integer('curso')->nullable()->unique();
            $table->integer('codigo_gdae')->nullable();
            $table->char('nomenclatura', 3)->nullable();
            $table->char('identificador', 1)->nullable()->unique();
            $table->integer('periodo')->nullable();
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
        Schema::dropIfExists('turmas');
    }
}
