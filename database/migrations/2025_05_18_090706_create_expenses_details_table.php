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
        Schema::create('expenses_details', function (Blueprint $table) {
    $table->id();
    $table->foreignId('exp_id')->constrained('exp_types')->onDelete('cascade');
    $table->unsignedBigInteger('branch_no');
    $table->integer('qty');
    $table->foreignId('unit_id')->constrained('unit_types')->onDelete('cascade');
    $table->decimal('amount', 10, 2);
    $table->string('pay_method'); 
    $table->string('invoice_no');
    $table->string('done_by');
    $table->string('acc_no')->nullable(); 
    $table->foreignId('supp_id')->constrained('suppliers')->onDelete('cascade');
    $table->timestamps();
});

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('expenses_details');
    }
};
