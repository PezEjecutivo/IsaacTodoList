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
        Schema::create('characters', function (Blueprint $table) {
            $table->id();
            //$table->morphs('tokenable');
            $table->string('name')->unique();
            $table->integer('health');
            $table->integer('damage');
            $table->integer('speed');
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
