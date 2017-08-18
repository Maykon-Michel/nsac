<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFichaAvaliacaoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ficha_avaliacao', function (Blueprint $table) {
            $table->char('matricula',7);
            $table->integer('disc');
            $table->integer('cod_item');
            $table->smallinteger('bim')->nullable();
            $table->string('obs')->nullable();
            $table->increments('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ficha_avaliacao');
    }
}
