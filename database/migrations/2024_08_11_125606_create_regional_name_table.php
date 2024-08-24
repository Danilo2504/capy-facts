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
        Schema::create('regional_names', function (Blueprint $table) {
            $table->id();
            $table->foreignId('general_information_id');
            $table->foreign('general_information_id')->on('general_information')->references('id')->onDelete('cascade');
            $table->string('language', 50);
            $table->string('country', 100);
            $table->string('name', 100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('regional_name');
    }
};
