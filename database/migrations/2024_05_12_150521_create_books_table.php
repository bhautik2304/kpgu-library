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
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->text("book_img_small");
            $table->text("book_img_banner");
            $table->text("desc");
            $table->unsignedBigInteger("books_number");
            $table->unsignedBigInteger("bookcategories_id");
            $table->unsignedBigInteger('authers_id')->nullable();
            $table->unsignedBigInteger('fines_id')->nullable();
            $table->boolean('status')->default(true);
            $table->unsignedBigInteger('qty')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
