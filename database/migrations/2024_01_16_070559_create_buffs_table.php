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
        Schema::create('buffs', function (Blueprint $table) {
            $table->id('id_buff');
            $table->string('name');
            $table->integer('strength');
            $table->integer('dexterity');
            $table->integer('intelligence');
            $table->integer('wisdom');
            $table->string('specialEffect');
            $table->time('timeOfAction');
            $table->dateTime('timeEnd');

            $table->unsignedBigInteger('character_id');

            $table->foreign('character_id', 'buff_character_fk')->on('characters')->references('id_character');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('buffs');
    }
};
