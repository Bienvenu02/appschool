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
        Schema::create('classes', function (Blueprint $table) {
            $table->id();

            $table->string('name')->unique();

            $table->unsignedBigInteger('niveau_id')->nullable();
            $table->foreign('niveau_id')->references('id')->on('niveaux')->onDelete('cascade');

            $table->unsignedInteger('serie_id')->nullable();
            $table->foreign('serie_id')->references('id')->on('series')->onDelete('cascade');

            // $table->unsignedBigInteger('groupe_id')->nullable();
            // $table->foreign('groupe_id')->references('id')->on('groupes')->onDelete('cascade');

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
        Schema::dropIfExists('classes');
    }
};
