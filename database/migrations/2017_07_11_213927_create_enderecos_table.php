<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEnderecosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('alunos')->create('enderecos', function (Blueprint $table) {
            $table->increments('codigo');
            $table->string('logradouro', 70)->nullable();
            $table->string('numero', 10)->nullable();
            $table->string('complemento', 20)->nullable();
            $table->integer('cidade')->nullable()->default(0);
            $table->char('cep', 10)->nullable();
            $table->string('bairro', 40)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('alunos')->dropIfExists('enderecos');
    }
}
