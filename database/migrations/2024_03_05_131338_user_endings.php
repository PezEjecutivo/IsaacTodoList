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
        Schema::create('user_endings', function (Blueprint $table) {
            //$table->morphs('tokenable');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('ending_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('ending_id')->references('id')->on('endings');
            $table->primary(['user_id', 'ending_id']);
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
