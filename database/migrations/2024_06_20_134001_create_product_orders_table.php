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
        Schema::create('product_orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id');
            $table->string('billing_country');
            $table->string('billing_fname');
            $table->string('billing_lname');
            $table->string('billing_address');
            $table->string('billing_city');
            $table->string('billing_email');
            $table->string('billing_number');
    

            $table->string('shpping_country');
            $table->string('shpping_fname');
            $table->string('shpping_lname');
            $table->string('shpping_address');
            $table->string('shpping_city');
            $table->string('shpping_email');
            $table->string('shpping_number');
  

            $table->decimal('total', 11, 2)->nullable();
            $table->string('method');
            $table->string('gateway_type', 100)->nullable();
            $table->string('currency_code');
            $table->string('order_number');
            $table->decimal('shipping_charge', 11, 2)->nullable();
            $table->string('payment_status');
            $table->string('order_status')->default('pending');
            $table->string('txnid');
            $table->string('charge_id');
     
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_orders');
    }
};
