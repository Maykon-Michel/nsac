<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDocumentosTable extends Migration
{
    protected $connection = "alunos";
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documentos', function (Blueprint $table) {
            $table->char('aluno', 7)->primary();
            $table->boolean('titulo_eleitor')->nullable();
            $table->boolean('reservista')->nullable()->default(false);
            $table->boolean('reservista_cam')->nullable();
            $table->boolean('rg')->nullable();
            $table->boolean('rg_protocolo')->nullable();
            $table->boolean('rg_nao_alfabetizado')->nullable();
            $table->boolean('certidao_nascimento')->nullable();
            $table->boolean('historico_medio')->nullable();
            $table->boolean('historico_fundamental')->nullable();
            $table->boolean('certificado_medio')->nullable();
            $table->boolean('certificado_fundamental')->nullable();
            $table->boolean('declaracao_conclusao_fundamental')->nullable();
            $table->boolean('declaracao_matricula_medio')->nullable();
            $table->integer('ano_conclusao_medio')->nullable();
            $table->dateTime('rg_data_retirada')->nullable();
            $table->boolean('gdae_medio')->nullable();
            $table->boolean('gdae_fundamental')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('documentos');
    }
}
