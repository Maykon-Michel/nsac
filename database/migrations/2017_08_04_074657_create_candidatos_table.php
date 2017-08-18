<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCandidatosTable extends Migration
{
    protected $connection = "vestibulinho";
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('vestibulinho')->create('candidatos', function (Blueprint $table) {
            $table->integer('curso')->nullable();
            $table->string('nome', 100)->nullable();
            $table->string('rg', 14)->nullable();
            $table->char('rg_origem', 2)->nullable();
            $table->integer('sexo')->nullable();
            $table->date('data_nasc')->nullable();
            $table->string('end_logradouro', 100)->nullable();
            $table->string('end_bairro', 40)->nullable();
            $table->integer('end_cep')->nullable();
            $table->string('end_cidade', 80)->nullable();
            $table->char('end_estado', 2)->nullable();
            $table->char('fone', 14)->nullable();
            $table->char('cel', 14)->nullable();
            $table->string('email', 100)->nullable();
            $table->integer('classificacao')->nullable();
            $table->integer('ano')->nullable();
            $table->boolean('desistiu')->nullable()->default(false);
            $table->boolean('matriculado')->nullable()->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('vestibulinho')->dropIfExists('candidatos');
    }
}
