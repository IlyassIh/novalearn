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
        Schema::create('notes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('matiere_id');
            $table->foreign('matiere_id')->references('id')->on('matieres');

            $table->unsignedBigInteger('etudiant_id');
            $table->foreign('etudiant_id')->references('id')->on('etudiants');

            $table->unsignedBigInteger('prof_id');
            $table->foreign('prof_id')->references('id')->on('profs');

            $table->unsignedBigInteger('controle_id');
            $table->foreign('controle_id')->references('id')->on('controles');

            $table->unsignedBigInteger('filiere_id');
            $table->foreign('filiere_id')->references('id')->on('filiers');
            $table->float('note');



            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notes');
    }
};
