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
        Schema::create('sales__reports', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('product_id');
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
            $table->unsignedBigInteger('order_id');
            $table->foreign('order_id')->references('id')->on('orders')->onDelete('cascade');
            $table->integer('quantity_sold');
            $table->decimal('total_amount', 10, 2); // Assuming total amount is a decimal with 10 digits and 2 decimals
            $table->date('sale_date');
            $table->decimal('profit_margin', 8, 2)->nullable(); // Assuming profit margin is a decimal with 8 digits and 2 decimals, and can be nullable
            $table->decimal('discount_amount', 10, 2)->nullable(); // Assuming discount amount is a decimal with 10 digits and 2 decimals, and can be nullable
            $table->decimal('taxes', 10, 2)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sales__reports');
    }
};
