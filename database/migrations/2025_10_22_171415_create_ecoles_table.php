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
        Schema::create('ecoles', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Nom de l'école
            $table->string('code')->unique()->nullable();
            $table->string('slogan')->nullable(); // Slogan ou devise
            $table->string('logo')->nullable();
            $table->string('email')->nullable();
            $table->string('telephone')->nullable();
            $table->string('adresse')->nullable();
            $table->string('ville')->nullable();
            $table->string('pays')->default('Bénin');
            $table->string('site_web')->nullable();
            $table->text('description')->nullable();
            $table->string('ifu');
            $table->boolean('active')->default(1);
            
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
        Schema::dropIfExists('ecoles');
    }
};
