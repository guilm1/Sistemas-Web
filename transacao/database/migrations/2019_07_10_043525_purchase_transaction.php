<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PurchaseTransaction extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
         Schema::create('purchase_transactions', function (Blueprint $table) {
             $table->increments('id');
             $table->integer('id_purchase');
             $table->float('amount');
             $table->integer('transaction_code');
         });
     }

     /**
      * Reverse the migrations.
      *
      * @return void
      */
     public function down()
     {
         Schema::dropIfExists('purchase_transactions');
     }
 }
