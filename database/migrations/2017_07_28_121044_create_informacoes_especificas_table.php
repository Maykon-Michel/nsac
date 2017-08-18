<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInformacoesEspecificasTable extends Migration
{
    
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('alunos')->create('informacoes_especificas', function (Blueprint $table) {
            $table->integer('descanso_noturno')->nullable();
            $table->string('como_conheceu_cti', 50)->nullable();
            $table->string('atividades_lazer', 50)->nullable();
            $table->string('avisar_emergencia', 50)->nullable();
            $table->string('telefone_emergencia', 14)->nullable();
            $table->boolean('vicio_cigarro')->nullable();
            $table->char('matricula',7)->primary();
            $table->integer('renda_mensal')->nullable();
            $table->integer('rh')->nullable();
            $table->integer('tipo_sanguineo')->nullable();
            $table->integer('habitos_estudo')->nullable();
            $table->integer('raca')->nullable()->default(0);
            $table->integer('local_estudo')->nullable();
            $table->integer('tempo_disponivel')->nullable();
            $table->integer('moradia')->nullable();
            $table->integer('est_civil')->nullable()->default(0);
            $table->integer('residentes')->nullable();
            $table->string('conjuge',100)->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('alunos')->dropIfExists('informacoes_especificas');
    }
}
