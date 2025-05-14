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
        Schema::create('product', function (Blueprint $table) {
            $table->id();
			$table->string('sku')->unique;
			$table->string('path')->unique;
			$table->string('nama');
			$table->string('category_id');
			$table->decimal('harga', 20, 4);
			$table->integer('qty');
			$table->decimal('weight', 20, 4);
			
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product');
    }
};
