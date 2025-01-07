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
        Schema::create('rajaongkir_settings', function (Blueprint $table) {
            $table->id();
            $table->string('api_key');
            $table->enum('api_type', ['starter', 'pro'])->default('starter');
            $table->string('couriers')->nullable();
            $table->boolean('is_valid')->default(false);
            $table->text('error_message')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rajaongkir_settings');
    }
};
