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
        Schema::create('homesection_fives', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('content');
            $table->string('titleTwo');
            $table->text('contentTwo');
            $table->string('titleThree');
            $table->text('contentThree');
            $table->string('titleFour');
            $table->text('contentFour');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('homesection_fives');
    }
};
