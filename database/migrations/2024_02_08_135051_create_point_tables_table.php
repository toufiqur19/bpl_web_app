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
        Schema::create('point_tables', function (Blueprint $table) {
            $table->id();
            $table->string('team_no');
            $table->string('team_name');
            $table->string('team_logo');
            $table->string('match');
            $table->string('win');
            $table->string('los');
            $table->string('nrr');
            $table->string('point');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('point_tables');
    }
};
