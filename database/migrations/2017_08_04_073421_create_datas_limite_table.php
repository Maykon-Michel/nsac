<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDatasLimiteTable extends Migration
{
    protected $connection = "calendario";
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('calendario')->create('datas_limite', function (Blueprint $table) {
            $table->integer('ano')->primary();
            $table->date('notas_1bi')->nullable();
            $table->date('notas_2bi')->nullable();
            $table->date('notas_rec1')->nullable();
            $table->date('notas_3bi')->nullable();
            $table->date('notas_4bi')->nullable();
            $table->date('notas_rec2')->nullable();
            $table->date('notas_recf')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('calendario')->dropIfExists('datas_limite');
    }
}
