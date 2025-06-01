<?php


use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWashPricingTable extends Migration
{
    public function up(): void
    {
        Schema::create('wash_pricing', function (Blueprint $table) {
            $table->id();
            $table->foreignId('wash_type_id')->constrained('wash_types')->onDelete('cascade');
            $table->decimal('price', 8, 2);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('wash_pricing');
    }
}
