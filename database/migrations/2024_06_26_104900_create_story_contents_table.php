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
        Schema::create('story_contents', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('image');
            $table->text('subtitle')->nullable();
            $table->text('who_we_are');
            $table->text('our_vision');
            $table->text('our_history');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('story_contents');
    }
};
