<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSaidasTable extends Migration
{
    
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('alunos')->create('saidas', function (Blueprint $table) {
            $table->increments('id');
            $table->char('aluno', 7)->nullable();
            $table->date('data')->nullable();
            $table->addColumn('time', 'hora')->nullable();
            $table->string('motivo', 100)->nullable();
            $table->string('autorizacao', 100)->nullable();
            $table->string('liberacao', 50)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('alunos')->dropIfExists('saidas');
    }
}
