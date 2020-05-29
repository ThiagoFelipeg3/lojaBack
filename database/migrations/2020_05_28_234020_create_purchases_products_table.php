<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePurchasesProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchases_products', function (Blueprint $table) {
            $table->integer('purchase_id')->length(10)->unsigned();
            $table->integer('product_id')->length(10)->unsigned();

            $table->primary(['purchase_id', 'product_id']);

            $table->integer('quantity')->length(10);

            $table->foreign('purchase_id')->references('id')->on('purchases');
            $table->foreign('product_id')->references('id')->on('products');

            $table->timestamps();
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
