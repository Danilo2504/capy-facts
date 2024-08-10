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
        Schema::create('general_information', function (Blueprint $table) {
            $table->id();
            $table->string('scientific_name');
            $table->text('description');
            $table->string('weight');
            $table->string('height');
            $table->string('length');
            $table->text('habitat');
            $table->json('distribution');
            $table->string('conservation_status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
