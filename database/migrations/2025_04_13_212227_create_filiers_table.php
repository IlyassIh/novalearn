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
        Schema::create('filiers', function (Blueprint $table) {
            $table->id();
            $table->string('nom', 50);
            $table->timestamps();
        });

        DB::table('filiers')->insert([
            [
            'nom' => 'TS. Developpment Informatique',
            'created_at' => now(),
            'updated_at' => now()
        ], 
        [
            'nom' => 'TS. Reseau Informatique',
            'created_at' => now(),
            'updated_at' => now()
        ],
        [
            'nom' => 'TS. Developpment Multimedia',
            'created_at' => now(),
            'updated_at' => now()
        ],
        [
            'nom' => 'Gestion des Entreprises',
            'created_at' => now(),
            'updated_at' => now()
        ]
    ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('filiers');
    }
};
