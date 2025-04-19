<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
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
        Schema::create('etudiants', function (Blueprint $table) {
            $table->id();
            $table->string('cni', 10)->unique();
            $table->string('nom', 20);
            $table->string('prenom', 20);
            $table->string('email', 50)->unique();
            $table->string('password', 255);
            $table->string('telephone', 10)->unique();
            $table->text('adresse', 100);
            $table->string('niveau_etude', 50);
            $table->string('centre', 25);
            $table->integer('annee_scolaire');
            $table->string('semaistre');
            $table->unsignedBigInteger('filiere_id');
            $table->boolean('validation')->default(0);
            $table->foreign('filiere_id')->references('id')->on('filiers');
            $table->timestamps();
        });

        DB::table('etudiants')->insert([
            [
                'cni' => strtoupper('ae12345'),
                'nom' => ucfirst('el guarhi'),
                'prenom' => ucfirst('mohammad amine'),
                'email' => strtolower('medamine@gmail.com'),
                'password' => Hash::make('123456789'),
                'telephone' => '0611223344',
                'adresse' => '7da miage',
                'niveau_etude' => 'bac',
                'centre' => 'Novalearn Sale',
                'annee_scolaire' => 1,
                'semaistre' => 's1',
                'validation' => 1,
                'filiere_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'cni' => strtoupper('ih11'),
                'nom' => ucfirst('ihassane'),
                'prenom' => ucfirst('ilyass'),
                'email' => strtolower('ilyassihassane@gmail.com'),
                'password' => Hash::make('123456789'),
                'telephone' => '0639191019',
                'adresse' => 'sale',
                'niveau_etude' => 'bac',
                'centre' => 'Novalearn Sale',
                'annee_scolaire' => 1,
                'semaistre' => 's1',
                'validation' => 1,
                'filiere_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],

            [
                'cni' => strtoupper('mb11'),
                'nom' => ucfirst('elboussoughti'),
                'prenom' => ucfirst('mohammed'),
                'email' => strtolower('medboussoughti@gmail.com'),
                'password' => Hash::make('123456789'),
                'telephone' => '0639191018',
                'adresse' => 'sale ouade',
                'niveau_etude' => 'bac',
                'centre' => 'Novalearn Sale',
                'annee_scolaire' => 1,
                'semaistre' => 's1',
                'validation' => 1,
                'filiere_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],

            [
                'cni' => strtoupper('sa11'),
                'nom' => ucfirst('el sara'),
                'prenom' => ucfirst('sara'),
                'email' => strtolower('sara@gmail.com'),
                'password' => Hash::make('123456789'),
                'telephone' => '0639191017',
                'adresse' => 'sale hay salam',
                'niveau_etude' => 'bac',
                'centre' => 'Novalearn Sale',
                'annee_scolaire' => 1,
                'semaistre' => 's1',
                'validation' => 1,
                'filiere_id' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }



    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('etudiants');
    }
};
