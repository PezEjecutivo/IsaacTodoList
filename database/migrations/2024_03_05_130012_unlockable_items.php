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
            $table->string('effect');
            $table->unsignedBigInteger('enemy_method_id');
            $table->unsignedBigInteger('challenge_method_id');
            $table->foreign('enemy_method_id')->references('id')->on('enemys')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreign('challenge_method_id')->references('id')->on('challenges')->cascadeOnDelete()->cascadeOnUpdate();
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
