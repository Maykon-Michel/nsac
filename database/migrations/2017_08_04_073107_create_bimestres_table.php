<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBimestresTable extends Migration
{
    protected $connection = "calendario";
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('calendario')->create('bimestres', function (Blueprint $table) {
            $table->increments('id');
            $table->date('data_inicio')->nullable();
            $table->date('data_fim')->nullable();
            $table->integer('bimestre')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('calendario')->dropIfExists('bimestres');
    }
}
