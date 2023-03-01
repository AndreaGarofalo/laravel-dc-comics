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
        Schema::create('comics', function (Blueprint $table) {
            $table->id();
            $table->string('title', 80);
            $table->text('description');
            $table->string('thumb', 80)->unsigned()->nullable();
            $table->tinyInteger('price');
            $table->string('series', 30);
            $table->year('sale_date')->nullable();
            $table->string('type', 30);
            $table->text('artist');
            $table->text('writers');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comics');
    }
};