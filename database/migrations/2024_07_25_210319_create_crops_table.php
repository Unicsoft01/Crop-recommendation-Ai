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
        Schema::create('crops', function (Blueprint $table) {
            $table->id();
            $table->string('imageUrl')->default('assets/img/logo/logo-login.png');
            $table->string('cropName')->nullable();
            $table->string('botanicalName')->nullable();
            $table->string('pH')->nullable();
            $table->string('nitrogen')->nullable();
            $table->string('phosphorus')->nullable();
            $table->string('potassium')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('crops');
    }
};
