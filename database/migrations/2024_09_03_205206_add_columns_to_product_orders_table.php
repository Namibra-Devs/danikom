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
        Schema::table('product_orders', function (Blueprint $table) {
            $table->decimal('cart_total', 8, 2)->default(0.00)->after('shpping_number');
            $table->decimal('discount', 8, 2)->default(0.00)->after('cart_total');
            $table->decimal('tax', 8, 2)->default(0.00)->after('discount');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('product_orders', function (Blueprint $table) {
            $table->dropColumn(['tax', 'discount', 'cart_total']);
        });
    }
};
