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
        Schema::create('subscribers_transactions', function (Blueprint $table) {
    $table->id();
    $table->foreignId('sub_no')->constrained('prepaid_subscriptions')->onDelete('cascade');
    $table->unsignedBigInteger('branch_no');
    $table->string('plate_no');
    $table->foreignId('wash_type_id')->constrained('wash_types')->onDelete('cascade');
    $table->decimal('amount', 10, 2);
    $table->decimal('reminder', 10, 2);   
    $table->string('invoice_no');
    $table->timestamps();
});

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subscribers_transactions');
    }
};
