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
            $table->id();
            //$table->morphs('tokenable');
            $table->string('user_id');
            $table->string('character_id'); 
            $table->foreign('user_id')->refrences('id')->on('users');  
            $table->foreign('character_id')->refrences('id')->on('characters');  
            $table->primary(['user_id', 'character_id']);
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
