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
        Schema::create('most_runs', function (Blueprint $table) {
            $table->id();
            $table->string('pos');
            $table->string('player_name');
            $table->string('team');
            $table->string('match');
            $table->string('image')->nullable();
            $table->string('inns');
            $table->string('runs');
            $table->string('sr');
            $table->string('avg');
            $table->string('hight');
            $table->string('50s');
            $table->string('100s');
            $table->string('4s');
            $table->string('6s');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('most_runs');
    }
};