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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            // $table->unsignedBigInteger('customer_id');
            $table->foreignId('customer_id')->constrained('customers')->cascadeOnDelete();
            $table->dateTime('order_date');
            $table->decimal('total_amount', 10, 2);
            $table->string('status');
            $table->string('payment_method');
            $table->text('shipping_address');
            $table->date('delivery_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
