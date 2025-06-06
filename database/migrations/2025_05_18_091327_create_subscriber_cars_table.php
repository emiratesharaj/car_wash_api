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
        Schema::create('subscriber_cars', function (Blueprint $table) {
    $table->id();
    $table->foreignId('sub_id')->constrained('prepaid_subscriptions')->onDelete('cascade');
    $table->string('sub_name');
    $table->string('plate_no');
    $table->timestamps();
});

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subscriber_cars');
    }
};
