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
            $table->foreign('filiere_id')->references('id')->on('filiers');

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
                'filiere_id' => 3,
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

            //------------------------------- M9
            [
                'filiere_id' => 1,
                'matiere_id' => 9,
                'annee_scolaire' => 1,
                'semaistre' => 'S2',
                'coef' => 4
            ],
            [
                'filiere_id' => 2,
                'matiere_id' => 9,
                'annee_scolaire' => 1,
                'semaistre' => 'S2',
                'coef' => 4
            ],
            [
                'filiere_id' => 3,
                'matiere_id' => 9,
                'annee_scolaire' => 1,
                'semaistre' => 'S2',
                'coef' => 3
            ],

            //------------------------------- M10
            [
                'filiere_id' => 1,
                'matiere_id' => 10,
                'annee_scolaire' => 1,
                'semaistre' => 'S2',
                'coef' => 3
            ],
            [
                'filiere_id' => 2,
                'matiere_id' => 10,
                'annee_scolaire' => 1,
                'semaistre' => 'S2',
                'coef' => 3
            ],

            //------------------------------- M11
            [
                'filiere_id' => 1,
                'matiere_id' => 11,
                'annee_scolaire' => 1,
                'semaistre' => 'S2',
                'coef' => 2
            ],
            [
                'filiere_id' => 2,
                'matiere_id' => 11,
                'annee_scolaire' => 1,
                'semaistre' => 'S2',
                'coef' => 2
            ],

            //------------------------------- M12
            [
                'filiere_id' => 1,
                'matiere_id' => 12,
                'annee_scolaire' => 1,
                'semaistre' => 'S1',
                'coef' => 1
            ],
            [
                'filiere_id' => 4,
                'matiere_id' => 12,
                'annee_scolaire' => 1,
                'semaistre' => 'S2',
                'coef' => 2
            ],

            //------------------------------- M13
            [
                'filiere_id' => 1,
                'matiere_id' => 13,
                'annee_scolaire' => 2,
                'semaistre' => 'S3',
                'coef' => 2
            ],
            [
                'filiere_id' => 2,
                'matiere_id' => 13,
                'annee_scolaire' => 1,
                'semaistre' => 'S2',
                'coef' => 3
            ],

            //------------------------------- M14
            [
                'filiere_id' => 1,
                'matiere_id' => 14,
                'annee_scolaire' => 2,
                'semaistre' => 'S4',
                'coef' => 2
            ],
            [
                'filiere_id' => 2,
                'matiere_id' => 14,
                'annee_scolaire' => 2,
                'semaistre' => 'S3',
                'coef' => 3
            ],

            //------------------------------- M15
            [
                'filiere_id' => 1,
                'matiere_id' => 15,
                'annee_scolaire' => 1,
                'semaistre' => 'S1',
                'coef' => 3
            ],
            [
                'filiere_id' => 2,
                'matiere_id' => 15,
                'annee_scolaire' => 1,
                'semaistre' => 'S1',
                'coef' => 3
            ],

            //------------------------------- M16
            [
                'filiere_id' => 1,
                'matiere_id' => 16,
                'annee_scolaire' => 1,
                'semaistre' => 'S2',
                'coef' => 3
            ],

            //------------------------------- M17
            [
                'filiere_id' => 1,
                'matiere_id' => 17,
                'annee_scolaire' => 2,
                'semaistre' => 'S3',
                'coef' => 3
            ],

            //------------------------------- M18
            [
                'filiere_id' => 1,
                'matiere_id' => 18,
                'annee_scolaire' => 2,
                'semaistre' => 'S3',
                'coef' => 3
            ],

            //------------------------------- M19
            [
                'filiere_id' => 1,
                'matiere_id' => 19,
                'annee_scolaire' => 2,
                'semaistre' => 'S3',
                'coef' => 2
            ],

            //------------------------------- M20
            [
                'filiere_id' => 1,
                'matiere_id' => 20,
                'annee_scolaire' => 2,
                'semaistre' => 'S4',
                'coef' => 4
            ],

            //------------------------------- M21
            [
                'filiere_id' => 1,
                'matiere_id' => 21,
                'annee_scolaire' => 2,
                'semaistre' => 'S4',
                'coef' => 3
            ],

            //------------------------------- M22
            [
                'filiere_id' => 1,
                'matiere_id' => 22,
                'annee_scolaire' => 2,
                'semaistre' => 'S4',
                'coef' => 3
            ],

            //------------------------------- M23
            [
                'filiere_id' => 1,
                'matiere_id' => 23,
                'annee_scolaire' => 2,
                'semaistre' => 'S4',
                'coef' => 2
            ],

            //------------------------------- M24
            [
                'filiere_id' => 2,
                'matiere_id' => 24,
                'annee_scolaire' => 1,
                'semaistre' => 'S1',
                'coef' => 2
            ],

            //------------------------------- M25
            [
                'filiere_id' => 2,
                'matiere_id' => 25,
                'annee_scolaire' => 2,
                'semaistre' => 'S3',
                'coef' => 3
            ],

            //------------------------------- M26
            [
                'filiere_id' => 2,
                'matiere_id' => 26,
                'annee_scolaire' => 2,
                'semaistre' => 'S3',
                'coef' => 2
            ],

            //------------------------------- M27
            [
                'filiere_id' => 2,
                'matiere_id' => 27,
                'annee_scolaire' => 2,
                'semaistre' => 'S3',
                'coef' => 2
            ],

            //------------------------------- M28
            [
                'filiere_id' => 2,
                'matiere_id' => 28,
                'annee_scolaire' => 2,
                'semaistre' => 'S4',
                'coef' => 3
            ],

            //------------------------------- M29
            [
                'filiere_id' => 2,
                'matiere_id' => 29,
                'annee_scolaire' => 2,
                'semaistre' => 'S4',
                'coef' => 3
            ],

            //------------------------------- M30
            [
                'filiere_id' => 2,
                'matiere_id' => 30,
                'annee_scolaire' => 2,
                'semaistre' => 'S4',
                'coef' => 2
            ],

            //------------------------------- M31
            [
                'filiere_id' => 2,
                'matiere_id' => 31,
                'annee_scolaire' => 2,
                'semaistre' => 'S4',
                'coef' => 2
            ],

            //------------------------------- M32
            [
                'filiere_id' => 2,
                'matiere_id' => 32,
                'annee_scolaire' => 2,
                'semaistre' => 'S4',
                'coef' => 2
            ],

            //------------------------------- M33
            [
                'filiere_id' => 3,
                'matiere_id' => 33,
                'annee_scolaire' => 1,
                'semaistre' => 'S1',
                'coef' => 3
            ],

            //------------------------------- M34
            [
                'filiere_id' => 3,
                'matiere_id' => 34,
                'annee_scolaire' => 1,
                'semaistre' => 'S1',
                'coef' => 3
            ],

            //------------------------------- M35
            [
                'filiere_id' => 3,
                'matiere_id' => 35,
                'annee_scolaire' => 1,
                'semaistre' => 'S2',
                'coef' => 3
            ],

            //------------------------------- M36
            [
                'filiere_id' => 3,
                'matiere_id' => 36,
                'annee_scolaire' => 1,
                'semaistre' => 'S2',
                'coef' => 3
            ],

            //------------------------------- M37
            [
                'filiere_id' => 3,
                'matiere_id' => 37,
                'annee_scolaire' => 1,
                'semaistre' => 'S2',
                'coef' => 2
            ],

            //------------------------------- M38
            [
                'filiere_id' => 3,
                'matiere_id' => 38,
                'annee_scolaire' => 1,
                'semaistre' => 'S2',
                'coef' => 2
            ],

            //------------------------------- M39
            [
                'filiere_id' => 3,
                'matiere_id' => 39,
                'annee_scolaire' => 2,
                'semaistre' => 'S3',
                'coef' => 3
            ],

            //------------------------------- M40
            [
                'filiere_id' => 3,
                'matiere_id' => 40,
                'annee_scolaire' => 2,
                'semaistre' => 'S3',
                'coef' => 3
            ],

            //------------------------------- M41
            [
                'filiere_id' => 3,
                'matiere_id' => 41,
                'annee_scolaire' => 1,
                'semaistre' => 'S3',
                'coef' => 3
            ],

            //------------------------------- M42
            [
                'filiere_id' => 3,
                'matiere_id' => 42,
                'annee_scolaire' => 2,
                'semaistre' => 'S3',
                'coef' => 2
            ],

            //------------------------------- M43
            [
                'filiere_id' => 3,
                'matiere_id' => 43,
                'annee_scolaire' => 2,
                'semaistre' => 'S3',
                'coef' => 2
            ],

            //------------------------------- M44
            [
                'filiere_id' => 3,
                'matiere_id' => 44,
                'annee_scolaire' => 2,
                'semaistre' => 'S4',
                'coef' => 3
            ],

            //------------------------------- M45
            [
                'filiere_id' => 3,
                'matiere_id' => 45,
                'annee_scolaire' => 2,
                'semaistre' => 'S4',
                'coef' => 3
            ],

            //------------------------------- M46
            [
                'filiere_id' => 3,
                'matiere_id' => 46,
                'annee_scolaire' => 2,
                'semaistre' => 'S4',
                'coef' => 3
            ],

            //------------------------------- M47
            [
                'filiere_id' => 3,
                'matiere_id' => 47,
                'annee_scolaire' => 2,
                'semaistre' => 'S4',
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
