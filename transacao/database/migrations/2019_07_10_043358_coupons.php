<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Coupons extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
         Schema::create('coupons', function (Blueprint $table) {
             $table->increments('id');
             $table->string('name');
             $table->bigInteger('coupon_type');
             $table->float('coupon_value');
         });
     }

     /**
      * Reverse the migrations.
      *
      * @return void
      */
     public function down()
     {
         Schema::dropIfExists('coupons');
     }
 }
