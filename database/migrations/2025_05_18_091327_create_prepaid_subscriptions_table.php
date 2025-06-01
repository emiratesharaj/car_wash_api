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
        Schema::create('prepaid_subscriptions', function (Blueprint $table) {
    $table->id(); // Sub_NO
    $table->string('sub_name'); // اسم المشترك
    $table->string('sub_location');
    $table->string('contact_no');
    $table->date('sub_date');
    $table->decimal('pay_amount', 10, 2);
    $table->integer('no_of_days');
    $table->string('acc_no');
    $table->string('invoice_no');
    $table->boolean('status')->default(1); // 0 = جديد, 1 = تجديد
    $table->timestamps();
});

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prepaid_subscriptions');
    }
};
