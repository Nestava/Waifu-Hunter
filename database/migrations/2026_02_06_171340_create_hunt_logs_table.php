<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('hunt_logs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()->constrained()->cascadeOnDelete();
            $table->foreignId('attacker_waifu_id')->nullable()->constrained('waifus')->nullOnDelete();
            $table->foreignId('target_waifu_id')->nullable()->constrained('waifus')->nullOnDelete();
            $table->float('final_chance');
            $table->boolean('success');
            $table->integer('roll_value');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hunt_logs');
    }
};
