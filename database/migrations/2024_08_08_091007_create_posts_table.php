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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('category_id');
            $table->string('title')->unique();
            $table->string('slug')->unique();
            $table->longText('desc')->nullable();
            $table->string('image' )->unique();
            $table->timestamps();
            $table->foreign('user_id')->on('users')->references('id')->onDelete('cascade');
            $table->foreign('category_id')->on('categories')->references('id')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
