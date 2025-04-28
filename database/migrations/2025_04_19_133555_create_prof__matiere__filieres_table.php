<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('prof__matiere__filieres', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('prof_id');
            $table->foreign('prof_id')->references('id')->on('profs');

            $table->unsignedBigInteger('matiere_id');
            $table->foreign('matiere_id')->references('id')->on('matieres');

            $table->unsignedBigInteger('filiere_id');
            $table->foreign('filiere_id')->references('id')->on('filiers');

            $table->integer('annee_scolaire');

            $table->string('semaistre');
        });

        // DB::table('prof__matiere__filieres')->insert([
        //     [
        //         'prof_id' => 1,
        //         'matiere_id' => 1,
        //         'filiere_id' => 1,
        //         'annee_scolaire' => 1,
        //         'semaistre' => 'S1'
        //     ],
        //     [
        //         'prof_id' => 1,
        //         'matiere_id' => 5,
        //         'filiere_id' => 2,
        //         'annee_scolaire' => 1,
        //         'semaistre' => 'S1'
        //     ],
        //     [
        //         'prof_id' => 1,
        //         'matiere_id' => 2,
        //         'filiere_id' => 1,
        //         'annee_scolaire' => 1,
        //         'semaistre' => 'S1'
        //     ],
        //     [
        //         'prof_id' => 2,
        //         'matiere_id' => 3,
        //         'filiere_id' => 1,
        //         'annee_scolaire' => 1,
        //         'semaistre' => 'S1'
        //     ],
        //     [
        //         'prof_id' => 3,
        //         'matiere_id' => 6,
        //         'filiere_id' => 1,
        //         'annee_scolaire' => 1,
        //         'semaistre' => 'S1'
        //     ],
        //     ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prof__matiere__filieres');
    }
};
