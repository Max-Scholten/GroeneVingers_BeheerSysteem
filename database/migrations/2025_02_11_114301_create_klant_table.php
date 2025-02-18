<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void {
        Schema::create('klanten', function (Blueprint $table) {
            $table->id();
            $table->string('voornaam')->nullable();
            $table->string('achternaam')->nullable();
            $table->string('geboortedatum')->nullable();
            $table->string('email')->unique();
            $table->string('telefoon')->nullable();

            $table->timestamps();
        });
    }
    public function down(): void {
        Schema::dropIfExists('klanten');
    }
};
