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
            $table->id();
            //$table->morphs('tokenable');
            $table->string('user_id');
            $table->string('item_id'); 
            $table->foreign('user_id')->refrences('id')->on('users');  
            $table->foreign('item_id')->refrences('id')->on('unlockeable_items'); 
            $table->primary(['user_id', 'item_id']);
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
