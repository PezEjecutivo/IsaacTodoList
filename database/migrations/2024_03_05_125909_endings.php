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
        Schema::create('endings', function (Blueprint $table) {
            $table->id();
            //$table->morphs('tokenable');
            $table->string('name')->unique();
            $table->longText('description');
            $table->string('video');
            $table->unsignedBigInteger('enemy_id');
            $table->foreign('enemy_id')->references('id')->on('enemys')->cascadeOnDelete()->cascadeOnUpdate();
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
