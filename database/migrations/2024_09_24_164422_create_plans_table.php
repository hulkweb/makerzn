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
        Schema::create('plans', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Plan name like "Free Trial Project"
            $table->string('image')->nullable(); // Plan name like "Free Trial Project"
            $table->decimal('price', 10, 2); // Plan price (e.g., $50)
            $table->integer('duration')->default(1); // Contract duration in days
            $table->decimal('daily_rebate', 10, 2)->nullable(); // Daily rebate amount (e.g., $1.00)
            $table->decimal('recoverable_funds', 10, 2)->nullable(); // Recoverable funds
            $table->decimal('recoverable_funds_two', 10, 2)->nullable(); // Recoverable funds
            $table->boolean('principal_refund')->default(false); // If there's a principal refund
            $table->timestamp('interest_settlement_time')->nullable(); // Interest settlement period
            $table->string('status')->nullable(); // Plan name like "Free Trial Project"

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('plans');
    }
};
