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
        Schema::create('instituteur_classe', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('instituteur_id')->nullable();
            $table->foreign('instituteur_id')->references('id')->on('enseignants')->onDelete('cascade');

            $table->unsignedBigInteger('classe_id')->nullable();
            $table->foreign('classe_id')->references('id')->on('classes')->onDelete('cascade');

            $table->unsignedBigInteger('annee_scolaire_id')->nullable();
            $table->foreign('annee_scolaire_id')->references('id')->on('annee_scolaires')->onDelete('cascade');

            $table->date('date_affectation')->nullable();
            $table->date('date_desaffectation')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('instituteur_classe');
    }
};
