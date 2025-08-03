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
        Schema::create('patient_resources', function (Blueprint $table) {
            $table->id();
            $table->string('title'); // Resource title (e.g., "Patient Forms")
            $table->text('content')->nullable(); // Rich text content
            $table->string('file_path')->nullable(); // Uploaded file path
            $table->string('external_link')->nullable(); // External URL
            $table->string('resource_type')->default('page'); // page, form, link, info
            $table->integer('sort_order')->default(0); // Display order
            $table->boolean('is_active')->default(true); // Active status
            $table->string('slug')->unique(); // URL slug
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patient_resources');
    }
};
