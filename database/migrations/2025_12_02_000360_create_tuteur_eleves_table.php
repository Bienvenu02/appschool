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
        Schema::create('tuteur_eleves', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('eleve_id')->nullable();
            $table->foreign('eleve_id')->references('id')->on('eleves')->onDelete('cascade');

            $table->unsignedBigInteger('tuteur_id')->nullable();
            $table->foreign('tuteur_id')->references('id')->on('tuteurs')->onDelete('cascade');

            $table->enum('role', ['principal', 'secondaire'])->default('principal');

            // Informations spécifiques à la relation
            $table->boolean('est_responsable_legal')->default(true);
            $table->boolean('autorise_retrait_ecole')->default(true);
            $table->boolean('recevoir_factures')->default(true);
            $table->boolean('recevoir_communications')->default(true);

            // Priorité pour l'ordre d'affichage/contact
            $table->integer('ordre_contact')->default(99);

            // Dates importantes
            $table->date('date_debut')->nullable();
            $table->date('date_fin')->nullable();

            $table->text('notes')->nullable();
            $table->timestamps();

            // Contrainte d'unicité pour éviter les doublons
            $table->unique(['eleve_id', 'tuteur_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tuteur_eleves');
    }
};
