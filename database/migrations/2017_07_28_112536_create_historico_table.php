<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHistoricoTable extends Migration
{
    protected $connection = "alunos";
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('alunos')->create('historico', function (Blueprint $table) {
            $table->increments('codigo');
            $table->dateTime('data_ocorrido')->nullable()->default('NOW');
            $table->string('descricao')->nullable();
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
        Schema::connection('alunos')->dropIfExists('historico');
    }
}
