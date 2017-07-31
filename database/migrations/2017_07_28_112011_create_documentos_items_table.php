<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDocumentosItemsTable extends Migration
{
    protected $connection = "alunos";
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documentos_items', function (Blueprint $table) {
            $table->increments('id');
            $table->string('descricao', 100)->nullable();
            $table->integer('categoria')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('documentos_items');
    }
}
