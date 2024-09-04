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
        Schema::table('products', function (Blueprint $table) {
            $table->decimal('rating', 11, 2)->default(0);
            $table->text('meta_description')->nullable();
            $table->decimal('previous_price', 11, 2)->nullable()->change();
            $table->string('type', 100)->comment('digital - digital product, physical - physical product')->nullable();
            $table->string('download_file', 100)->nullable();
            $table->text('download_link')->nullable();
            $table->integer('stock')->default(0)->change();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
            //
        });
    }
};
