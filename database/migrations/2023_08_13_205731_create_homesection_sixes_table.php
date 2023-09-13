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
        Schema::create('homesection_sixes', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('content');
            $table->string('imageOne');
            $table->string('titleOne');
            $table->text('contentOne');
            $table->string('titleTwo');
            $table->text('contentTwo');
            $table->string('imageTwo');
            $table->string('titleThree');
            $table->text('contentThree');
            $table->string('imageThree');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('homesection_sixes');
    }
};
