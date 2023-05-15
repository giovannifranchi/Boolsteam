<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('games', function (Blueprint $table) {
            $table->id();
            $table->string('game');
            $table->text('game_link')->nullable();
            $table->date('release_date');
            $table->string('genre', 50);
            $table->string('dev', 100);
            $table->text('dev_link')->nullable();
            $table->string('publisher');
            $table->text('publisher_link')->nullable();
            $table->string('platform',30);
            $table->text('platform_link')->nullable();
            $table->text('description')->nullable();
            $table->float('score', 3,1);
            $table->text('review')->nullable();
            $table->tinyInteger('pegi')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('games');
    }
};
