<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegistrosTable extends Migration
{
    
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('alunos')->create('registros', function (Blueprint $table) {
            $table->boolean('estagio')->nullable();
            $table->integer('livro1')->nullable();
            $table->integer('livro2')->nullable();
            $table->integer('livro3')->nullable();
            $table->integer('pagina1')->nullable()->default(0);
            $table->integer('pagina2')->nullable()->default(0);
            $table->integer('pagina3')->nullable()->default(0);
            $table->integer('registro1')->nullable();
            $table->integer('registro2')->nullable();
            $table->integer('registro3')->nullable();
            $table->date('data1')->nullable();
            $table->date('data2')->nullable();
            $table->date('data3')->nullable();
            $table->char('aluno', 7)->primary();
            $table->string('gdae_medio')->nullable();
            $table->date('gdae_medio_data')->nullable();
            $table->string('gdae_tecnico')->nullable();
            $table->date('gdae_tecnico_data')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('alunos')->dropIfExists('registros');
    }
}
