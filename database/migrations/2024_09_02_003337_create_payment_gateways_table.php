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
        Schema::create('payment_gateways', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('subtitle', 255)->nullable();
            $table->string('title', 255)->nullable();
            $table->text('details')->nullable();
            $table->string('name', 100)->nullable();
            $table->string('type', 20)->default('manual');
            $table->mediumText('information')->nullable();
            $table->string('keyword', 255)->nullable();
            $table->tinyInteger('status')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payment_gateways');
    }
};
