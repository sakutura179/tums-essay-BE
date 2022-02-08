<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_details', function (Blueprint $table) {
            $table->unsignedBigInteger('product_id');
            $table->unsignedBigInteger('size_id');
            $table->primary(['product_id', 'size_id']);

            $table->foreign('product_id', 'fk_product_details_products')
                ->references('product_id')
                ->on('products')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('size_id', 'fk_product_details_sizes')
                ->references('size_id')
                ->on('sizes')
                ->onDelete('cascade')
                ->onUpdate('cascade');
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
        Schema::dropIfExists('product_details');
    }
}
