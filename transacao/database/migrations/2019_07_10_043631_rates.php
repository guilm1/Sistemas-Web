<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Rates extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
         Schema::create('rates', function (Blueprint $table) {
             $table->increments('id');
             $table->integer('id_product');
             $table->integer('id_user');
             $table->datetime('date_rated');
             $table->integer('points');
             $table->text('comment');
         });
     }

     /**
      * Reverse the migrations.
      *
      * @return void
      */
     public function down()
     {
         Schema::dropIfExists('rates');
     }
 }
