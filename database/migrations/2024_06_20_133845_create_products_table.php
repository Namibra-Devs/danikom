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
            $table->bigIncrements('id');
            $table->string('title')->nullable();
            $table->string('slug')->nullable();
            $table->integer('stock')->nullable();
            $table->string('sku')->nullable();
            $table->integer('category_id')->nullable();
            $table->text('tags')->nullable();
            $table->string('feature_image')->nullable();
            $table->text('summary')->nullable();
            $table->text('description')->nullable();
            $table->decimal('current_price', 11, 2)->default(0);
            $table->decimal('previous_price', 11, 2)->default(0);
            $table->integer('status')->default(1);
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
