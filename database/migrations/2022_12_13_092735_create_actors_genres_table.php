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
        Schema::create('actors_genres', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('genres_id');
            $table->unsignedBigInteger('actors_id');
            $table->timestamps();

            $table->foreign('genres_id')->references('id')->on('genres')->onDelete('cascade');
            $table->foreign('actors_id')->references('id')->on('actors')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('actors_genres');
    }
};
