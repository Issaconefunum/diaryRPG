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
        Schema::create('skills', function (Blueprint $table) {
            $table->id('id_skill');
            $table->string('name');
            $table->string('description');
            $table->date('lastUsed');
            $table->unsignedBigInteger('character_id');
            $table->unsignedBigInteger('lvlSkill_id');

            $table->foreign('character_id', 'skills_character_fk')->on('characters')->references('id_character');
            $table->foreign('lvlSkill_id', 'skills_lvlSkill_fk')->on('lvl_skills')->references('id_lvlSkill');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('skills');
    }
};
