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
            $table->integer('ano')->nullable;
            $table->integer('ano_curso')->nullable;
            $table->integer('curso')->nullable;
            $table->integer('codigo_gdae')->nullable;
            $table->char('nomenclatura', 3)->nullable;
            $table->char('identificador', 1)->nullable;
            $table->integer('periodo')->nullable;
            $table->boolean('ativo')->default(true);

            $table->unique(['ano', 'ano_curso', 'curso', 'identificador']);
            $table->foreign('curso')
                ->references('codigo')->on('cursos')
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
        Schema::dropIfExists('turmas');
    }
}
