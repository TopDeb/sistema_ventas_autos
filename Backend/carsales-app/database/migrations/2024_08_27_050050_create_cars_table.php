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
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('description');
            $table->foreignId('model_id')->constrained('models')->nullable();
            $table->foreignId('member_id')->constrained('members')->nullable();
            $table->string('fuel_type');
            $table->string('year');
            $table->string('mileage');
            $table->string('price');
            $table->string('photo');
            $table->string('sold');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};
