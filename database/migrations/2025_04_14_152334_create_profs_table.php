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
        Schema::create('profs', function (Blueprint $table) {
            $table->id();
            $table->string('cni', 10)->unique();
            $table->string('nom', 20);
            $table->string('prenom', 20);
            $table->string('email', 50)->unique();
            $table->string('password', 255);
            $table->string('telephone', 10)->unique();
            $table->timestamps();
        });

        DB::table('profs')->insert([
            [
                'cni' => strtoupper('d1122'),
                'nom' => 'chemam',
                'prenom' => 'driss',
                'email' => 'driss@gmail.com',
                'password' => Hash::make('123456789'),
                'telephone' => '0612345678',
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
        Schema::dropIfExists('profs');
    }
};
