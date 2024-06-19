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
        Schema::create('permalinks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('permalink', 50)->nullable();
            $table->string('type', 100)->nullable();
            $table->tinyInteger('details')->default(0)->comment('1 - for details page, 0 - for non-details page');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('permalinks');
    }
};
