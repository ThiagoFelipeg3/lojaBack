<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
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
            $table->integer('category_id')->length(10)->unsigned();
            $table->integer('brand_id')->length(10)->unsigned();
            $table->string('name', 100);
            $table->text('description')->nullable();
            $table->integer('stock')->length(10);
            $table->float('price',);
            $table->float('price_from');
            $table->float('rating');
            $table->tinyInteger('featured')->length(1);
            $table->tinyInteger('sale')->length(1);
            $table->tinyInteger('bestseller')->length(1);
            $table->tinyInteger('new_product')->length(1);
            $table->string('options', 200)->nullable();
            $table->timestamps();

            $table->foreign('category_id')->references('id')->on('categories');
            $table->foreign('brand_id')->references('id')->on('brands');
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
