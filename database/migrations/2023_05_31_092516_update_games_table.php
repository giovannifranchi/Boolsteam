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
        Schema::table('games', function(Blueprint $table){
            $table->dropForeign(['games_id']);
            $table->dropColumn('games_id');
            $table->float('price',5,2)->after('game_link');
            $table->boolean('highlight')->default(false);
            $table->unsignedTinyInteger('discount')->default(0);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('games', function(Blueprint $table){
            // $table->unsignedBigInteger('games_id')->nullable()->after('id');
            // $table->foreignId('games_id')
            // ->references('id')
            // ->on('genres')
            // ->nullOnDelete();
            $table->dropColumn('price');
            $table->dropColumn('highlight');
            $table->dropColumn('discount');
        });
    }
};
