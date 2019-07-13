<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Trans extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('trans', function (Blueprint $table) {
          $table->increments('id');
          $table->unsignedInteger('cliente_id');
          $table->unsignedInteger('tipo_id');
          $table->date('data');
          $table->decimal('valor', 10,2);
          $table->tinyInteger('credito');
          $table->timestamps();
          $table->foreign('cliente_id')
                ->references('id')
                ->on('clientes');
          $table->foreign('tipo_id')
                ->references('id')
                ->on('tipos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::dropIfExists('trans');
    }
}
