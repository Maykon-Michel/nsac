<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaisTable extends Migration
{
    
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('alunos')->create('pais', function (Blueprint $table) {
            $table->increments('codigo');
            $table->string('nome', 80)->nullable();
            $table->string('email', 50)->nullable();
            $table->string('telefone', 14)->nullable();
            $table->boolean('falecido', 14)->nullable()->default(false);
            $table->integer('nivel_ensino')->nullable()->default(0);
            $table->boolean('registrado')->nullable()->default(true);
            $table->string('profissao')->nullable();
            $table->string('telefone_comercial')->nullable();
            $table->string('moram_juntos')->nullable();
            $table->string('empresa')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('alunos')->dropIfExists('pais');
    }
}
