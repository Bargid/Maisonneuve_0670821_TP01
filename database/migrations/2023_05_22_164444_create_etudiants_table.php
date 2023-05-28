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
        Schema::create('etudiants', function (Blueprint $table) {
            $table->id();
            $table->string('prenom');
            $table->string('nom');
            $table->date('birthdate');
            $table->string('courriel')->unique();
            $table->string('telephone')->unique();
            $table->foreignId('ville_id')->constrained('villes');
            
            $table->timestamps();

           //$table->foreign('ville_id')->references('id')->on('villes'); // Add the foreign key constraint

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('etudiants');
    }
};
