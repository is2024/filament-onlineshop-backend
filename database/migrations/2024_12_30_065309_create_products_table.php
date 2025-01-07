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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('category_id')->constrained()->onDelete('restrict');
            $table->string('slug');
            $table->text('description');
            $table->integer('price');
            $table->integer('stock');
            $table->boolean('is_active')->default(false);
            $table->text('images')->nullable();
            $table->integer('weight')->default(0)->commenct('weight in grams');
            $table->integer('height')->default(0)->commenct('height in cm');
            $table->integer('width')->default(0)->commenct('width in cm');
            $table->integer('length')->default(0)->commenct('length in cm');;
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
