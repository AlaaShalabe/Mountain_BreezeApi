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
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('article_cover');
            $table->enum('category_en' , ['Westren Food' , 'Oriental Food' , 'Traditional Food']);
            $table->string('category_ar');
            $table->string('title_en');
            $table->string('title_ar');
            $table->longText('content_en');
            $table->longText('content_ar');
            $table->string('date');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};
