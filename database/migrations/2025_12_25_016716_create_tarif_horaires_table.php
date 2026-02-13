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
        Schema::create('tarif_horaires', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('classe_id')->nullable();
            $table->foreign('classe_id')->references('id')->on('classes')->onDelete('cascade');

            $table->unsignedBigInteger('matiere_id')->nullable();
            $table->foreign('matiere_id')->references('id')->on('matieres')->onDelete('cascade');

            $table->decimal('tarif_horaire', 10, 2);

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
        Schema::dropIfExists('tarif_horaires');
    }
};
