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
        Schema::create('restrictions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('case_registry_id');
            $table->string('type')->nullable();
            $table->text('details')->nullable();
            $table->timestamps();

            // Foreign keys
            $table->foreign('case_registry_id')->references('id')->on('case_registries')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('restrictions');
    }
};
