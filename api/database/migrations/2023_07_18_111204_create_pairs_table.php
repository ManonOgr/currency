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
        Schema::create('pairs', function (Blueprint $table) {
            $table->id();
            $table->float('rate');
            $table->foreign('currency_from_id')->nullable()->references('id')->on('currencies')->onDelete('cascade');
            $table->foreign('currency_to_id')->nullable()->references('id')->on('currencies')->onDelete('cascade');
            $table->unsignedBigInteger('currency_from_id')->nullable();
            $table->unsignedBigInteger('currency_to_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pairs');
    }
};
