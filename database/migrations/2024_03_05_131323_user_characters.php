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
        Schema::create('user_characters', function (Blueprint $table) {
            //$table->morphs('tokenable');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('character_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('character_id')->references('id')->on('characters')->cascadeOnDelete()->cascadeOnUpdate();
            $table->primary(['user_id', 'character_id']);
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
