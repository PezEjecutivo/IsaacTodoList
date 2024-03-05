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
        //
        Schema::create('challenges', function (Blueprint $table) {
            $table->id();
            //$table->morphs('tokenable');
            $table->string('name')->unique();
            $table->string('description');
            $table->unsignedBigInteger('playable_character');
            $table->unsignedBigInteger('final_enemy');
            $table->foreign('playable_character')->references('id')->on('characters');
            $table->foreign('final_enemy')->references('id')->on('enemys');
            //$table->timestamps();
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
