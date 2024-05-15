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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->text("avatar")->nullable();
            $table->string("name");
            $table->unsignedBigInteger("number");
            $table->text("email");
            $table->text("password");
            $table->boolean('gender');
            $table->boolean('approvel')->default(false);
            $table->string("address")->nullable();
            $table->enum("academic", [
                'Pharmacy',
                'Nursing',
                'Physiotherapy',
                'Engineerning',
                'Diploma',
                'Ayurved',
                'Commerce',
                'Arts',
                'Science',
                'BBA',
                'MBA',
                'Research',
            ])->nullable();
            $table->string("program")->nullable();
            $table->enum("semester", ['1st Sem', '2nd Sem', '3rd Sem', '4th Sem', '5th Sem', '6th Sem'])->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
