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
        Schema::create('characters', function (Blueprint $table) {
            $table->id('id_character');
            $table->unsignedBigInteger('login_id');
            $table->string('name');
            $table->integer('experience');
            $table->unsignedBigInteger('race_id');
            $table->integer('strength');
            $table->integer('dexterity');
            $table->integer('intelligence');
            $table->integer('wisdom');
            $table->integer('lvl');

            $table->foreign('login_id', 'character_authorization-fk')->on('authorizations')->references('id');
            $table->foreign('race_id', 'race_authorization-fk')->on('races')->references('id_race');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('characters');
    }
};
