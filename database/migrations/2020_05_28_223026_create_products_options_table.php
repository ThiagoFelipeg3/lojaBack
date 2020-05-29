<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsOptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products_options', function (Blueprint $table) {
            $table->integer('product_id')->length(10)->unsigned();
            $table->integer('option_id')->length(10)->unsigned();
            
            $table->primary(['product_id', 'option_id']);

            $table->foreign('product_id')->references('id')->on('products');
            $table->foreign('option_id')->references('id')->on('options');            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products_options');
    }
}
