<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Products extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
         Schema::create('products', function (Blueprint $table) {
             $table->increments('id');
             $table->integer('id_category');
             $table->integer('id_brand');
             $table->string('name');
             $table->text('description');
             $table->integer('stock');
             $table->float('price');
             $table->float('price_from');
             $table->float('rating');
             $table->tinyinteger('featured');
             $table->tinyinteger('sale');
             $table->tinyinteger('bestseller');
             $table->tinyinteger('new_product');
             $table->string('options')->nullable();
         });
     }

     /**
      * Reverse the migrations.
      *
      * @return void
      */
     public function down()
     {
         Schema::dropIfExists('products');
     }
 }
