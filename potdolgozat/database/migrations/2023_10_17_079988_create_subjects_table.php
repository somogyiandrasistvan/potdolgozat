<?php

use App\Models\subjects;
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
        Schema::create('subjects', function (Blueprint $table) {
            $table->id('subject_id');
            $table->String('name');
            $table->String('description');
            $table->integer('limit');
            $table->timestamps();
        });

        subjects::create([
            'name' => 'fizika',
            'description' => 'nehéz',
            'limit' => 15,
        ]);

        subjects::create([
            'name' => 'tesi',
            'description' => 'jó',
            'limit' => 20,
        ]);

        subjects::create([
            'name' => 'kémia',
            'description' => 'nehéz',
            'limit' => 10,
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subjects');
    }
};
