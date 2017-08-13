<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotasTable extends Migration
{
    protected $connection = "alunos";

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('alunos')->create('notas', function (Blueprint $table) {
            $table->increments('id');
            $table->char('aluno', 7)->nullable();
            $table->integer('disciplina')->nullable();
            $table->smallInteger('nb1')->nullable();
            $table->smallInteger('nb2')->nullable();
            $table->smallInteger('nb3')->nullable();
            $table->smallInteger('nb4')->nullable();
            $table->smallInteger('fb1')->default(0);
            $table->smallInteger('fb2')->default(0);
            $table->smallInteger('fb3')->default(0);
            $table->smallInteger('fb4')->default(0);
            $table->smallInteger('rec1')->default(3);
            $table->smallInteger('rec2')->default(3);
            $table->smallInteger('recfinal')->default(3);
            $table->boolean('recurso1')->nullable()->default(false);
            $table->boolean('recurso2')->nullable()->default(false);
            $table->boolean('recurso3')->nullable()->default(false);
            $table->boolean('nc1')->nullable()->default(false);
            $table->boolean('nc2')->nullable()->default(false);
            $table->boolean('nc3')->nullable()->default(false);
            $table->boolean('nc4')->nullable()->default(false);
            $table->boolean('conselhoparcial')->default(false);
            $table->boolean('conselhofinal')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('alunos')->dropIfExists('notas');
    }
}
