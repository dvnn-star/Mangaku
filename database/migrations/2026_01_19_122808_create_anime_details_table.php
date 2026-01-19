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
        Schema::create('anime_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('anime_id');
            $table->longText('synopsis');
            $table->string('producers');
            $table->string('studios');
            $table->string('genres');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('anime_details');
    }
};
