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
        Schema::create('initial_items', function (Blueprint $table) {
            $table->id();
            //$table->morphs('tokenable');
            $table->string('name')->unique();
            $table->string('type');
            $table->string('effect');
            $table->string('associated_character')->nullable();
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
