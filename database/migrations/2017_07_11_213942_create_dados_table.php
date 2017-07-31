<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('alunos')->create('dados', function (Blueprint $table) {
            $table->string('nome', 100);
            $table->string('apelido', 40)->nullable();
            $table->integer('endereco')->nullable()->default(0);
            $table->date('data_de_nascimento')->nullable();
            $table->integer('cidade_nascimento')->nullable();
            $table->integer('pai')->nullable()->default(0);
            $table->integer('mae')->nullable()->default(0);
            $table->string('rg', 20)->nullable();
            $table->date('emissao_do_rg')->nullable();
            $table->integer('sexo')->nullable();
            $table->string('email', 100)->nullable();
            $table->boolean('arquivo')->nullable();
            $table->char('matricula', 7)->primary();
            $table->string('cpf', 11)->nullable();
            $table->char('ra_gdae', 16)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('alunos')->dropIfExists('dados');
    }
}
