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
        Schema::create('providers', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Provider name (e.g., "Dr. Jane Smith, MD")
            $table->string('title'); // Professional title (e.g., "Board-certified Family Physician")
            $table->text('bio')->nullable(); // Detailed biography
            $table->string('photo')->nullable(); // Profile photo path
            $table->string('specialty'); // Primary specialty
            $table->boolean('accepts_telehealth')->default(true); // Telehealth availability
            $table->boolean('accepts_new_patients')->default(true); // New patient acceptance
            $table->string('email')->nullable(); // Contact email
            $table->string('phone')->nullable(); // Contact phone
            $table->integer('sort_order')->default(0); // Display order
            $table->boolean('is_active')->default(true); // Active status
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('providers');
    }
};
