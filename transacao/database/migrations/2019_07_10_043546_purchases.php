<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Purchases extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
         Schema::create('purchases', function (Blueprint $table) {
             $table->increments('id');
             $table->integer('id_user');
             $table->integer('id_coupon');
             $table->float('total_amount');
             $table->integer('payment_type');
             $table->integer('payment_status');
         });
     }

     /**
      * Reverse the migrations.
      *
      * @return void
      */
     public function down()
     {
         Schema::dropIfExists('purchases');
     }
 }
