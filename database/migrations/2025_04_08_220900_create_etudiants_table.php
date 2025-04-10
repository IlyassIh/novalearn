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
            $table->string('cni', 10)->unique();
            $table->string('nom', 25);
            $table->string('prenom', 25);
            $table->string('email', 255)->unique();
            $table->string('telephone', 10)->unique();
            $table->string('password', 255);
            $table->string('adresse', 255);
            $table->string('niveau_etudes', 20);
            $table->string('centre_souhaite', 50);
            $table->timestamps();
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
