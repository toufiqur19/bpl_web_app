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
        Schema::create('most_wicket', function (Blueprint $table) {
            $table->id();
            $table->string('pos');
            $table->string('player_name');
            $table->string('image')->nullable();
            $table->string('team_name');
            $table->string('match_no');
            $table->string('inns');
            $table->string('over');
            $table->string('wicket');
            $table->string('eco');
            $table->string('avg');
            $table->string('four_w');
            $table->string('five_w');
            $table->string('bbi');
            $table->string('runs')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('most_wicket');
    }
};
