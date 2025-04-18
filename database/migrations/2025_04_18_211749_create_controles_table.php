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
        Schema::create('controles', function (Blueprint $table) {
            $table->id();
            $table->string('nom_controle', 50);
        });

        DB::table('controles')->insert([
            [
                'nom_controle' => 'Controle 1',
                
            ],
            [
                'nom_controle' => 'Controle 2',
            ],
            [
                'nom_controle' => 'Controle 3',
            ],
            [
                'nom_controle' => 'Exam Theorique',
            ],
            [
                'nom_controle' => 'Exam Pratique',
            ]]);

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('controles');
    }
};
