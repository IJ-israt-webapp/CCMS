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
        Schema::create("teachers", function (Blueprint $table) {
            $table->id();
            $table->string('name');  
            $table->string('identity');  
            $table->string('number');  
            $table->string('mail');  
            $table->string('nid');  
            $table->string('address');  
            $table->string('gender'); 
            $table->string('status')->default('Active');         
            $table->timestamps();
        }); 
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teachers');
    }
};
