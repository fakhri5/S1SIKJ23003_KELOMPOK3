<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('cart_items', function (Blueprint $table) {
            $table->id('id_cart_item');
            $table->unsignedBigInteger('id_group');
            $table->unsignedBigInteger('id_product');
            $table->integer('quantity');
            $table->timestamp('added_at')->useCurrent();

            $table->foreign('id_group')->references('id_group')->on('cart_groups');
            $table->foreign('id_product')->references('id_product')->on('products');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cart_items');
    }
};
