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
        Schema::create('user_items', function (Blueprint $table) {
            //$table->morphs('tokenable');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('item_id');
            $table->foreign('user_id')->references('id')->on('users')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreign('item_id')->references('id')->on('unlockable_items')->cascadeOnDelete()->cascadeOnUpdate();
            $table->primary(['user_id', 'item_id']);
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
