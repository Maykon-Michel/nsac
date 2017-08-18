<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAtrasosTable extends Migration
{
    
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('alunos')->create('atrasos', function (Blueprint $table) {
            $table->increments('id');
            $table->char('aluno', 7)->nullable();
            $table->date('date')->nullable();
            $table->addColumn('time', 'hora')->nullable();
            $table->string('motivo', 100)->nullable();
            $table->boolean('justificavel')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('alunos')->dropIfExists('atrasos');
    }
}
