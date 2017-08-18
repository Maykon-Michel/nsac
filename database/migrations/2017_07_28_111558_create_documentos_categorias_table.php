<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDocumentosCategoriasTable extends Migration
{
    
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('alunos')->create('documentos_categorias', function (Blueprint $table) {
            $table->increments('codigo');
            $table->string('nome', 100);
            $table->boolean('ativo')->default(true);
            $table->integer('importancia')->nullable()->default(0);
            $table->char('aluno', 7)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('alunos')->dropIfExists('documentos_categorias');
    }
}
