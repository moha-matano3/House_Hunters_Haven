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
        Schema::create('houses', function (Blueprint $table) {
            $table->id();
            $table->binary('house_img');
            $table->string('house_name');
            $table->string('town');
            $table->string('county');
            $table->string('size');
            $table->string('bedrooms');
            $table->string('amenities');
            $table->integer('price');
            $table->string('status');
            $table->tinyinteger('is_wifi');
            $table->tinyinteger('is_gated');
            $table->tinyinteger('is_furnished');
            $table->tinyinteger('is_parking');
            $table->tinyinteger('is_pool');
            $table->tinyinteger('is_gym');
            $table->tinyinteger('is_security');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('houses');
    }
};
