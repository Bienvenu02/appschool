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
        Schema::create('eleves', function (Blueprint $table) {
            $table->id();

            // Relation vers User
            $table->foreignId('user_id')->constrained()->onDelete('cascade');

            // Matricule généré automatiquement ou manuellement
            $table->string('matricule')->nullable()->unique();

            $table->string('nom');
            $table->string('prenom');

            $table->date('date_naissance');
            $table->string('lieu_naissance')->nullable();

            $table->enum('sexe', ['M', 'F']);

            $table->string('nationalite')->nullable();
            $table->string('photo')->nullable();


            // Infos usuelles
            $table->string('adresse')->nullable();
            $table->string('telephone')->nullable();

            // Scolarité
            $table->string('annee_scolaire'); // ex : "2024-2025"

            $table->foreignId('classe_id')->nullable()->constrained('classes')->onDelete('set null');
            $table->foreignId('niveau_id')->nullable()->constrained('niveaux')->onDelete('set null');

            $table->enum('statut', ['inscrit', 'desinscrit', 'transfere'])
                  ->default('inscrit');

            $table->unsignedBigInteger('userCreated_id')->nullable();
            $table->foreign('userCreated_id')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('userUpdated_id')->nullable();
            $table->foreign('userUpdated_id')->references('id')->on('users')->onDelete('cascade');
            
            $table->softDeletes();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('eleves');
    }
};
