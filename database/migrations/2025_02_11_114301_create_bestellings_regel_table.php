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
            $table->id('KlantID');
            $table->string('Naam');
            $table->text('Contactgegevens');
            $table->timestamps();
        });
    }
    public function down(): void {
        Schema::dropIfExists('klanten');
    }
};
