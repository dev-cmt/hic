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
        Schema::create('event_registers', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();;
            $table->string('email')->unique();
            $table->string('phone')->nullable();;
            $table->string('location')->nullable();;
            $table->string('destination')->nullable();;
            $table->string('qualification')->nullable();;
            $table->date('date')->nullable();;
            $table->string('score')->nullable(); // Assuming the score is an integer and optional
            $table->foreignId('event_id')->constrained('events')->onDelete('cascade'); // Foreign key reference to the events table
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('event_registers');
    }
};
