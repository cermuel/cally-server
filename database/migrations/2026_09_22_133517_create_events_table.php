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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')
                ->constrained()
                ->cascadeOnDelete();
            $table->string('name');
            $table->string('slug');
            $table->string('color');
            $table->text('description')->nullable();
            $table->unique(['user_id', 'slug']);
            $table->boolean('is_active');
            $table->enum('visibility', ['private', 'public'])->default('public');
            $table->boolean('is_profile')->default(false);
            $table->unsignedInteger('first_reminder')->nullable();
            $table->unsignedInteger('second_reminder')->nullable();
            $table->unsignedBigInteger('duration_minutes');
            $table->unsignedBigInteger('pre_meeting_minutes')->nullable();
            $table->unsignedBigInteger('post_meeting_minutes')->nullable();
            $table->unsignedBigInteger('max_meetings_daily')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
