<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReligiaoTable extends Migration
{
    protected $connection = "alunos";
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('alunos')->create('religiao', function (Blueprint $table) {
            $table->char('matricula', 7)->primary();
            $table->integer('religiao')->nullable()->default(0);
            $table->boolean('praticante')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('alunos')->dropIfExists('religiao');
    }
}
