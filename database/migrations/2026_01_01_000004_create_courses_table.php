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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('stream_id')->nullable()->constrained('streams')->nullOnDelete();
            $table->string('title');
            $table->string('slug')->unique();
            $table->enum('level', ['UG', 'PG', 'PhD', 'Diploma'])->default('UG');
            $table->string('duration')->nullable(); // e.g. "4 Years", "2 Years"
            $table->string('eligibility')->nullable(); // e.g. "12th Pass with 50%"
            $table->string('average_fee')->nullable(); // e.g. "INR 80,000 - 2,50,000 / Year"
            $table->text('career_prospects')->nullable();
            $table->longText('content')->nullable();
            $table->boolean('is_published')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
