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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id'); // Link to user
            $table->unsignedBigInteger('currency_id'); // Link to user

            $table->enum('type', ['deposit', 'withdrawal']); // Transaction type: deposit or withdrawal
            $table->enum('status', ['pending', 'in_progress', 'completed', 'failed']); // Transaction status
            $table->decimal('amount', 20, 8); // Cryptocurrency amount (BTC in this case)

            $table->decimal('usd_value', 15, 2); // USD equivalent of the cryptocurrency
            $table->timestamp('transaction_time'); // Time of transaction
            $table->string('proof')->nullable(); // Time of transaction
            $table->timestamp('wallet_address')->nullable(); // Time of transaction
            $table->unsignedBigInteger("user_plan_detail_id")->nullable();
            // Foreign key to the users table
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
