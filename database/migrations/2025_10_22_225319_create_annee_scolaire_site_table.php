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
        Schema::create('annee_scolaire_sites', function (Blueprint $table) {
            $table->id();
            $table->foreignId('annee_scolaire_id')->constrained('annees_scolaires')->onDelete('cascade');
            $table->foreignId('site_id')->constrained('sites')->onDelete('cascade');

            $table->unsignedBigInteger('userCreated_id')->nullable();
            $table->foreign('userCreated_id')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('userUpdated_id')->nullable();
            $table->foreign('userUpdated_id')->references('id')->on('users')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('annee_scolaire_sites');
    }
};
