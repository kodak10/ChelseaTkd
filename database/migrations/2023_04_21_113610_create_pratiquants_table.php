<?php

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
        Schema::create('pratiquants', function (Blueprint $table) {
            $table->id();
            $table->string('num_passeport');
            $table->string('grade');
            $table->string('nom');
            $table->string('prenoms');
            $table->string('date_nais');
            $table->string('lieu_nais');
            $table->string('profession');
            $table->string('contact_pratiquant');
            $table->string('nom_parent');
            $table->string('contact_parent1');
            $table->string('contact_parent2');
            $table->string('groupe_sanguin');
            $table->string('photo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pratiquants');
    }
};
