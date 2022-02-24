<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoiceDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoice_details', function (Blueprint $table) {
            $table->unsignedBigInteger('invoice_id');
            $table->unsignedBigInteger('product_id');
            $table->integer('quantity');
            $table->string('size', 5);
            $table->integer('total');

            $table->primary(['invoice_id', 'product_id', 'size']);

            $table->foreign('invoice_id')
                ->references('invoice_id')
                ->on('invoices')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('product_id')
                ->references('product_id')
                ->on('products')
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
        Schema::dropIfExists('invoice_details');
    }
}
