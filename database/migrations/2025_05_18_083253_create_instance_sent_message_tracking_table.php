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
        Schema::create('instance_sent_message_tracking', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('branch_no');
            $table->string('plate_no');
            $table->string('driver_mobile');
            $table->foreignId('msg_type')->constrained('instance_messages_types')->onDelete('cascade');
            $table->string('sent_status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('instance_sent_message_tracking');
    }
};
