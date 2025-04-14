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
            $table->string('cni',10)->unique();
            $table->string('nom', 20);
            $table->string('prenom', 20);
            $table->string('email', 50)->unique();
            $table->string('password', 255);
            $table->string('telephone', 10)->unique();
            $table->text('adresse', 100);
            $table->string('niveau_etude', 50);
            $table->string('centre', 25);
            $table->unsignedBigInteger('filiere_id');
            $table->foreign('filiere_id')->references('id')->on('filiers');
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
