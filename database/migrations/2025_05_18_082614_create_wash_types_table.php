<?php


use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWashTypesTable extends Migration
{
    public function up(): void
    {
        Schema::create('wash_types', function (Blueprint $table) {
            $table->id(); 
            $table->string('type_name');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('wash_types');
    }
}
