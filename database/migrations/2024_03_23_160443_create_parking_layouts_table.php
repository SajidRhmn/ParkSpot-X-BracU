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
        Schema::create('parking_layouts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('location_id');
            
            
            $table->integer('row');
            $table->integer('column');
            $table->boolean('is_available')->default(true);

            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('parking_layouts');
    }
};
