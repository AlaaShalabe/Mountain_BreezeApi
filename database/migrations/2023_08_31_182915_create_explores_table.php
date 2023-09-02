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
        Schema::create('explores', function (Blueprint $table) {
            $table->id();
            $table->string('article_cover');
            $table->enum('tags', ['Restaurant', 'Chalet', 'Activity', 'Nature', 'Pool', 'Events']);
            $table->string('title_en');
            $table->string('title_ar');
            $table->datetime('section')->nullable();
            $table->longText('content_en')->nullable();
            $table->longText('content_ar')->nullable();
            $table->string('date')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('explores');
    }
};