<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();

            $table->foreignId('user_id')->constrained()->cascadeOnDelete();

            $table->foreignId('platform_user_id')
                ->nullable()
                ->constrained('users')
                ->nullOnDelete();

            $table->string('name')->nullable();
            $table->string('email');

            $table->string('phone')->nullable();
            $table->string('timezone')->nullable();

            $table->string('company')->nullable();
            $table->string('tag')->nullable();

            $table->text('notes')->nullable();

            $table->timestamp('last_booked_at')->nullable();
            $table->unsignedInteger('bookings_count')->default(0);

            $table->timestamps();

            $table->unique(['user_id', 'email']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contacts');
    }
};
