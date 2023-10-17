<?php

use App\Models\User;
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
        Schema::create('users', function (Blueprint $table) {
            $table->id('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamps();
        });

        User::create([
            'name' => 'Csenge',
            'email' => 'Csenge@gmail.com'
        ]);

        User::create([
            'name' => 'Marci',
            'email' => 'Marci@gmail.com'
        ]);

        User::create([
            'name' => 'Zsombor',
            'email' => 'Zsombor@gmail.com'
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
