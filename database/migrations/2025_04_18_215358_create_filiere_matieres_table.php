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
        Schema::create('filiere_matieres', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('filiere_id');
            $table->foreign('filiere_id')->references('id')->on('filieres');

            $table->unsignedBigInteger('matiere_id');
            $table->foreign('matiere_id')->references('id')->on('matieres');

            $table->integer('annee_scolaire');

            $table->string('semaistre');
            $table->integer('coef');
        });

        DB::table('filiere_matieres')->insert([
            [
                'filiere_id' => 1,
                'matiere_id' => 1,
                'annee_scolaire' => 1,
                'semaistre' => 'S1',
                'coef' => 4
            ],
            [
                'filiere_id' => 2,
                'matiere_id' => 1,
                'annee_scolaire' => 1,
                'semaistre' => 'S1',
                'coef' => 4
            ],

            [
                'filiere_id' => 3,
                'matiere_id' => 1,
                'annee_scolaire' => 1,
                'semaistre' => 'S1',
                'coef' => 3
            ],


            // -------------------------------------------- M2
            [
                'filiere_id' => 1,
                'matiere_id' => 2,
                'annee_scolaire' => 1,
                'semaistre' => 'S1',
                'coef' => 3
            ],
            [
                'filiere_id' => 2,
                'matiere_id' => 2,
                'annee_scolaire' => 1,
                'semaistre' => 'S1',
                'coef' => 3
            ],

            [
                'filiere_id' => 3,
                'matiere_id' => 2,
                'annee_scolaire' => 1,
                'semaistre' => 'S1',
                'coef' => 2
            ],

            // ---------------------------- M3
            [
                'filiere_id' => 1,
                'matiere_id' => 3,
                'annee_scolaire' => 1,
                'semaistre' => 'S1',
                'coef' => 2
            ],
            [
                'filiere_id' => 2,
                'matiere_id' => 3,
                'annee_scolaire' => 1,
                'semaistre' => 'S1',
                'coef' => 2
            ],

            [
                'filiere_id' => 3,
                'matiere_id' => 3,
                'annee_scolaire' => 1,
                'semaistre' => 'S1',
                'coef' => 2
            ],
            [
                'filiere_id' => 4,
                'matiere_id' => 3,
                'annee_scolaire' => 1,
                'semaistre' => 'S1',
                'coef' => 2,
            ],

            //-------------------- M4

            [
                'filiere_id' => 1,
                'matiere_id' => 4,
                'annee_scolaire' => 1,
                'semaistre' => 'S2',
                'coef' => 2
            ],
            [
                'filiere_id' => 2,
                'matiere_id' => 4,
                'annee_scolaire' => 1,
                'semaistre' => 'S2',
                'coef' => 2
            ],

            [
                'filiere_id' => 3,
                'matiere_id' => 4,
                'annee_scolaire' => 1,
                'semaistre' => 'S2',
                'coef' => 2
            ],
            [
                'filiere_id' => 4,
                'matiere_id' => 4,
                'annee_scolaire' => 1,
                'semaistre' => 'S2',
                'coef' => 2,
            ],

            // ---------------------------- M5
            [
                'filiere_id' => 1,
                'matiere_id' => 5,
                'annee_scolaire' => 1,
                'semaistre' => 'S1',
                'coef' => 2
            ],
            [
                'filiere_id' => 2,
                'matiere_id' => 5,
                'annee_scolaire' => 1,
                'semaistre' => 'S1',
                'coef' => 2
            ],

            [
                'filiere_id' => 4,
                'matiere_id' => 5,
                'annee_scolaire' => 1,
                'semaistre' => 'S1',
                'coef' => 2
            ],
            //------------------------------- M6
            [
                'filiere_id' => 1,
                'matiere_id' => 6,
                'annee_scolaire' => 1,
                'semaistre' => 'S2',
                'coef' => 3
            ],
            [
                'filiere_id' => 2,
                'matiere_id' => 6,
                'annee_scolaire' => 1,
                'semaistre' => 'S2',
                'coef' => 2
            ],

             //------------------------------- M7
            [
                'filiere_id' => 1,
                'matiere_id' => 7,
                'annee_scolaire' => 2,
                'semaistre' => 'S3',
                'coef' => 3
            ],
            [
                'filiere_id' => 2,
                'matiere_id' => 7,
                'annee_scolaire' => 2,
                'semaistre' => 'S3',
                'coef' => 2
            ],

            //------------------------------- M8
            [
                'filiere_id' => 1,
                'matiere_id' => 8,
                'annee_scolaire' => 2,
                'semaistre' => 'S3',
                'coef' => 2
            ],
            [
                'filiere_id' => 2,
                'matiere_id' => 8,
                'annee_scolaire' => 2,
                'semaistre' => 'S3',
                'coef' => 2
            ],
            [
                'filiere_id' => 3,
                'matiere_id' => 8,
                'annee_scolaire' => 2,
                'semaistre' => 'S3',
                'coef' => 2
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('filiere_matieres');
    }
};
