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
        Schema::create('unlockable_items', function (Blueprint $table) {
            $table->id();
            //$table->morphs('tokenable');
            $table->string('name')->unique();
            $table->string('type'); 
            $table->string('efect'); 
            $table->string('enemy_method_id'); 
            $table->string('challenge_method_id');
            $table->foreign('enemy_method_id')->refrences('id')->on('enemys'); 
            $table->foreign('challenge_method_id')->refrences('id')->on('challenges'); 
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
