<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PurchasesProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
         Schema::create('purchases_products', function (Blueprint $table) {
             $table->increments('id');
             $table->integer('id_purchase');
             $table->integer('id_product');
             $table->integer('quantity');
         });
     }

     /**
      * Reverse the migrations.
      *
      * @return void
      */
     public function down()
     {
         Schema::dropIfExists('purchases_products');
     }
 }
