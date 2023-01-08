<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableCart extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cart', function (Blueprint $table) {
            $table->id();

            $table->unsignedInteger('customer_id');
            $table->foreign('customer_id')->references('id')->on('authors')->onDelete('cascade');


            $table->unsignedInteger('product_id')->unique();
            // $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');

            $table->unsignedInteger('qty')->default(1);
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
        Schema::dropIfExists('cart');
    }
}
