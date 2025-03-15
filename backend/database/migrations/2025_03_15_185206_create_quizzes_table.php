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
        Schema::create('quizzes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->cascadeOnUpdate();
            $table->foreignId('course_id')->constrained('courses')->cascadeOnUpdate();
            $table->foreignId('unit_id')->constrained('units')->cascadeOnUpdate();
            $table->text('question');
            $table->boolean('is_two_multiple_choice');
            $table->boolean('two_multiple_answer');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quizzes');
    }
};
