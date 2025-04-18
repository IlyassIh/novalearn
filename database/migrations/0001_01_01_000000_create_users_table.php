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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('cni', 10)->unique();
            $table->string('email', 50)->unique();
            $table->string('password', 255);
            $table->string('role', 15);
            $table->timestamps();
        });

        DB::table('users')->insert([
            [
            'cni' => strtoupper('vexo'),
            'email' => 'vexo@vexo.xom',
            'password' => Hash::make('vexo123'),
            'role' => 'Admin',
            'created_at' => now(),
            'updated_at' => now()
            ],
            [
            'cni' => 'ae12345',
            'email' => 'medamine@gmail.com',
            'password' => Hash::make('123456789'),
            'role' => 'Etudiant',
            'created_at' => now(),
            'updated_at' => now()
            ],
            [
            'cni' => 'd1122',
            'email' => 'driss@gmail.com',
            'password' => Hash::make('123456789'),
            'role' => 'Prof',
            'created_at' => now(),
            'updated_at' => now()
            ],
            ]);

        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
    }
};
