<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWashDailyTransactionsTable extends Migration
{
    public function up(): void
    {
        Schema::create('wash_daily_transactions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('branch_no');
            $table->string('plate_no');
            $table->string('driver_mobile');
            $table->foreignId('wash_type_id')->constrained('wash_types')->onDelete('cascade');
            $table->decimal('wash_price', 8, 2);
            $table->decimal('amount', 8, 2);
            $table->enum('pay_method', ['Cash', 'Visa', 'Other']);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('wash_daily_transactions');
    }
}
