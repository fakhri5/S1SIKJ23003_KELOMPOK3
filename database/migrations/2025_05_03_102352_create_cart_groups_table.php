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
        Schema::create('cart_groups', function (Blueprint $table) {
            $table->id('id_group');
            $table->unsignedBigInteger('id_user');
            $table->unsignedBigInteger('id_store');
            $table->enum('status', ['active', 'checked_out'])->default('active');
            $table->timestamp('created_at')->useCurrent();

            $table->foreign('id_user')->references('id_user')->on('users');
            $table->foreign('id_store')->references('id_store')->on('stores');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cart_groups');
    }
};
