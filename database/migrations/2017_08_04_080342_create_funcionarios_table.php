<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFuncionariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('funcionarios', function (Blueprint $table) {
            $table->increments('codigo');
            $table->string('nome', 80)->nullable();
            $table->string('rg', 15)->nullable();
            $table->string('cpf', 14)->nullable();
            $table->integer('funcao')->nullable();
            $table->string('email_pessoal', 40)->nullable();
            $table->string('email_funcional', 40)->nullable();
            $table->char('sexo', 1)->nullable();
            $table->integer('situacao')->nullable();
            $table->boolean('declaracao')->default(true);
            $table->string('apelido',30)->nullable(true);
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
        Schema::dropIfExists('funcionarios');
    }
}
