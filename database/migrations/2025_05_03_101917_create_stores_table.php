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
        Schema::create('stores', function (Blueprint $table) {
            $table->id('id_store');
            $table->unsignedBigInteger('id_user');
            $table->string('store_name', 100);
            $table->string('slug', 255)->unique();
            $table->text('description');
            $table->text('store_address');
            $table->string('store_logo')->nullable();
            $table->string('store_banner')->nullable();
            $table->enum('store_status', ['active', 'inactive'])->default('inactive');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('id_user')->references('id_user')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stores');
    }
};
