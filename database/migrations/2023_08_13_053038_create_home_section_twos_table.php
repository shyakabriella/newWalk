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
        Schema::create('home_section_twos', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('content');
            $table->string('imageOne');
            $table->string('titleTwo');
            $table->text('contentTwo');
            $table->string('titleThree');
            $table->text('contentThree');
            $table->string('titleFour');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('home_section_twos');
    }
};
