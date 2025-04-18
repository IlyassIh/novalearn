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
        Schema::create('matieres', function (Blueprint $table) {
            $table->id();
            $table->string('nom', 50);
        });

        DB::table('matieres')->insert([
            ['nom' => 'Algorithmique et programmation 1'], //1

            ['nom' => 'Systeme d\'exploitation 1'], //2

            ['nom' => 'Communication Francais'], //3

            ['nom' => 'Anglais Professionnel'], //4

            ['nom' => 'Mathematiques Appliquee'], //5

            ['nom' => 'Base de donnees 1'], //6

            ['nom' => 'Base de donnees 2'], //7

            ['nom' => 'Gestion de projet'], //8
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('matieres');
    }
};
