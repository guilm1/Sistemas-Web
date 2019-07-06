<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCidadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cidades', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome', 100);
            // estados -> 1:N
           // estado_id
           // $table->integer('estado_id')->unsigned();
           $table->unsignedInteger('estado_id');
           $table->timestamps();
           $table->foreign('estado_id')
                     ->references('id')
                     ->on('estados');
                     //->onDelete('cascade')
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cidades');
    }
}
